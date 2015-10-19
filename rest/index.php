<?php

require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route

$app->get('/location(/:country(/:city))',function ($country, $city) {
		$users = array();
		array_push($users, array(id=>1,name=>'test1'), array(id=>2,name=>'test2'));
        $return = json_encode($users);
        echo $return;
    } 
);

$app->run();
