<?php

require 'vendor/autoload.php';
use Predis\Client;

$redis = new Client();

if (isset($_POST['message'])) {
    $sender  = $_POST['sender'];
    $message = $_POST['message'];
    $redis->rpush('chatroom', '<b>' . $sender . '</b>: ' . $message);
    $message = $redis->lrange('chatroom', 0, $redis->llen('chatroom'));
    echo '<p>';
    foreach ($message as $sm) {
        echo $sm . '<br>';
    }
    echo '</p>';
}

if (isset($_POST['refresh'])) {
    $message = $redis->lrange('chatroom', 0, $redis->llen('chatroom'));
    echo '<p>';
    foreach ($message as $sm) {
        echo $sm . '<br>';
    }
    echo '</p>';
}
