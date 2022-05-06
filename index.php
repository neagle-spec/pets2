<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the Base class
$f3 = Base::instance();

// define a default root
$f3->route('GET /', function () {
    echo '<h1>My Pets</h1>';
    $view = new Template();
    echo $view->render('views/pet-home.html');
});

$f3->route('GET /order', function () {
    echo '<h1>Order a Pet</h1>';
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

$f3->route('GET /order1', function () {

    $view = new Template();
    echo $view->render('views/pet-order1.html');
});

$f3->route('POST /order2', function () {
    var_dump ($_POST);
    $_SESSION['petType'] = $_POST['petType'];
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['name'] = $_POST['name'];
    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

$f3->route('GET|POST /summary', function () {
    var_dump ($_POST);
    $_SESSION['petType'] = $_POST['petType'];
    $_SESSION['color'] = $_POST['color'];
    if (empty($_POST['name'])) {
        $name = "No Hobby selected";
    }
    else {
    }
    $_SESSION['name'] = $name;

    $view = new Template();
    echo $view->render('views/pet-summary.html');
});




// run fat free
$f3->run();
