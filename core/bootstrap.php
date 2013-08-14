<?php

require dirname(__FILE__) . '/../config/coreconfig.php';
require dirname(__FILE__) . '/CoreClassLoader.php';

if (defined('DEBUG')){
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', '1');
}

$loader = new CoreClassLoader();
$loader->setDirs($LOAD_DIRS);
$loader->register();

$dispathcer = new CoreDispatcher();
$dispathcer->dispatch();