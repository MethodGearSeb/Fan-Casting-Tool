<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

  $routes->get('/adaptations', function() {
  	MyTemporaryController::adaptations();
  });

  $routes->get('/actors', function() {
  	MyTemporaryController::actors();
  });

  $routes->get('/thelastofus', function() {
  	MyTemporaryController::thelastofus();
  });

  $routes->get('/thesnowman', function() {
  	MyTemporaryController::thesnowman();
  });

  $routes->get('/hughjackman', function() {
  	MyTemporaryController::hughjackman();
  });

  $routes->get('/kateesackhoff', function() {
  	MyTemporaryController::kateesackhoff();
  });

  $routes->get('/maisiewilliams', function() {
  	MyTemporaryController::maisiewilliams();
  });

  $routes->get('/michaelfassbender', function() {
  	MyTemporaryController::michaelfassbender();
  });
