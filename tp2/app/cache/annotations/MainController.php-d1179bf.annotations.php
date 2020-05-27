<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'UString' => 'Ubiquity\\utils\\base\\UString',
  'UCookie' => 'Ubiquity\\utils\\http\\UCookie',
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'AbstractWsController' => 'ws\\controllers\\AbstractWsController',
),
  '#traitMethodOverrides' => array (
  'controllers\\MainController' => 
  array (
  ),
),
  'controllers\\MainController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\MainController::news' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "news","name"=>"News")
  ),
  'controllers\\MainController::partnerDetails' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "partner/{name}","methods"=>["get"])
  ),
  'controllers\\MainController::sendMessage' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "sendMessage","methods"=>["post"])
  ),
  'controllers\\MainController::contactForm' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "contact","methods"=>["get"], "name"=>"Contact")
  ),
  'controllers\\MainController::partnersList' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "partners","methods"=>["get"], "name"=>"Partners")
  ),
  'controllers\\MainController::notfound' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "{route}","requirements"=>["route"=>"(?!admin|Admin).*?"],"priority"=>-1000)
  ),
  'controllers\\MainController::acceptCookiesOrNot' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "cookies/{accept}/{redirect}","name"=>"Cookies")
  ),
);

