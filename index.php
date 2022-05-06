<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Starts session
session_start();
// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// define a default root
$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/pet-home.html');
});

// define a home root
$f3->route('GET /home', function () {

    $view = new Template();
    echo $view->render('views/pet-home.html');
});

$f3->route('GET|POST /order', function () {

    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET|POST /order1', function () {

    $view = new Template();
    echo $view->render('views/pet-order1.html');
});

$f3->route('GET|POST /order2', function () {
    var_dump ($_POST);
    $_SESSION['petType1'] = $_POST['petType1'];
    $_SESSION['color1'] = $_POST['color1'];
    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

$f3->route('GET|POST /summary', function () {
    $_SESSION['name'] = $_POST['name'];

    $view = new Template();
    echo $view->render('views/pet-summary.html');
});




// run fat free
$f3->run();
