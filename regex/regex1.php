<?php

$string = <<<STRING
Quick brown fox
jumps over the
lazy dog.
STRING;

// echo count(explode(' ', $string));
// echo preg_match_all('/[\S]+[\W]?/', $string, $matches);
// echo preg_match_all('/[\w]+/', $string, $matches);
echo preg_match_all('/[a-zA-z]/', $string, $matches);
print_r($matches);

// echo count($matches[0]);