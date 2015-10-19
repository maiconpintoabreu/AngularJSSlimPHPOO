<?php
require 'DAO/LocationDao.php';
require 'Model/Location.php';
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route

$app->get('/location',function () use ($app) {
        $countryValue = $app->request()->params('country');
        $cityValue = $app->request()->params('city');
        $locationDao = new LocationDao();
        if($cityValue != null){
        	$return = json_encode($locationDao->getLocation($cityValue));
        }else if($countryValue != null){
        	$return = json_encode($locationDao->getCities($countryValue));
        }else{
        	$return = json_encode($locationDao->getCountries());
        }
        
        echo $return;
    } 
);

$app->run();