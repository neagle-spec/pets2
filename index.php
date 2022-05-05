<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// define a default root
$f3->route('GET /', function ($f3) {
    echo '<h1>My Pets</h1>';
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

$f3->route('GET /order', function ($f3) {
    echo '<h1>Order1</h1>';
    $view = new Template();
    echo $view->render('views/pet-order1.html');
});

$f3->route('GET /order2', function ($f3) {
    echo '<h1>Order2</h1>';
    $view = new Template();
    echo $view->render('views/pet-order2.html');
});



// run fat free
$f3->run();
