<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once__DIR__."/../vendor/autoload.php";

    $app= new Silex\Application();
    $app->get("/hello", function() {
        return "Hello friend!";
    });

    return $app;
 ?>
