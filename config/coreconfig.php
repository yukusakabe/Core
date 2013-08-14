<?php

define('DEBUG', 1);

define('SYSTEM_ROOT_PATH', dirname(__FILE__) . '/..');
define('CONFIG_PATH', dirname(__FILE__));
define('CONTROLLERS_PATH', SYSTEM_ROOT_PATH . '/test/controllers');
define('TPL_PATH', SYSTEM_ROOT_PATH . '/test/views');

$LOAD_DIRS[] = SYSTEM_ROOT_PATH . '/config';
$LOAD_DIRS[] = SYSTEM_ROOT_PATH . '/core';
$LOAD_DIRS[] = SYSTEM_ROOT_PATH . '/test/controllers';
$LOAD_DIRS[] = SYSTEM_ROOT_PATH . '/test/models';
$LOAD_DIRS[] = SYSTEM_ROOT_PATH . '/test/views';