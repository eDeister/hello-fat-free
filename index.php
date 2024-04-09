<?php
//Error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require autoload
require_once ('vendor/autoload.php');

//Instantiate base class
$f3 = Base::instance();

//Define default route
$f3->route('GET /', function() {
    echo '<h1>Hello Fat-Free!</h1>';
});

//Run fat free
$f3->run();