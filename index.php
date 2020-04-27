<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file

require_once('vendor/autoload.php');

//Instantiate f3 base class

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {

    $view = new Template();
    echo $view->render('views/home.html');


});

$f3->route('GET /breakfast', function() {

    $view = new Template();
    echo $view->render('views/bfast.html');

});

//Run fat free

$f3->run();
