<?php return array (
  'classes' => 
  array (
    0 => 'classes.*',
    1 => 'extensions.*',
    2 => 'classes.barcode.*',
    3 => 'classes.payments.*',
    4 => 'classes.delivery.*',
    5 => 'classes.oauth.*',
  ),
  'theme' => 'default',
  'urlFormat' => 'get',
  'db' => 
  array (
    'type' => 'mysql',
    'tablePre' => 'tiny_',
    'host' => '127.0.0.11',
    'port' => '3306',
    'user' => 'root',
    'password' => 'Admin123.',
    'name' => 'thinkshop',
  ),
  'route' => 
  array (
  ),
  'extConfig' => 
  array (
    'controllerExtension' => 
    array (
      0 => 'ControllerExt',
    ),
  ),
);?>