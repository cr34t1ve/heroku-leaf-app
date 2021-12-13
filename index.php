<?php

// import composer's autoloader
require __DIR__ . "/vendor/autoload.php";

// initialise leaf
$app = new Leaf\App;

$app->get('/', function() use($app) {
  // response is initialized with leaf
  $app->response()->json([
    "message" => "Hello World"
  ]);
});

// run the defined routes
$app->run();