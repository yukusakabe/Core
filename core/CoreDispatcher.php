<?php

class CoreDispatcher
{
    public function dispatch()
    {
        $param = ltrim($_SERVER['REQUEST_URI'], '/');

        $params = array();
        if ('' != $param) {
            $params = explode('/', $param);
        }
        
        $argument = 'index';
        if (0 < count($params)) {
            $argument = $params[0];
        }
        
        $class_name = ucfirst(strtolower($argument)) . 'Controller';
        $controller_path = CONTROLLERS_PATH . '/' . $class_name . '.php';
        
        try {
            if (!file_exists($controller_path)) {
                throw new CoreErrorException($class_name);
            }
        } catch (CoreErrorException $e) {
            $e->render404NotFoundPage();
            
            exit();
        }
        
        require $controller_path;
        
        $controller = new $class_name();
        $controller->run();
    }
}