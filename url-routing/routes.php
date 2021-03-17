<?php
require "Router.php";

use OurApplication\Routing\Router;
use OurApplication\Controller\PriceController;

Router::get("/", function(){
   echo "Welcome Home"; 
});

Router::get("/asdf", function(){
   echo "Welcome asdf"; 
});

Router::get("/hello/(\w+)", function($name){
   echo "Welcome {$name}"; 
});

Router::get("/verb", function(){
   echo $_SERVER['REQUEST_METHOD']; 
});

Router::post("/verb", function(){
   echo $_SERVER['REQUEST_METHOD']; 
});

Router::delete("/verb", function(){
   echo $_SERVER['REQUEST_METHOD']; 
});

Router::get("/price", [PriceController::class, 'showPrice']);
Router::get("/price2", "PriceController@showPrice");

Router::cleanup();