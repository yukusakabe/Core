<?php

class CoreClassLoader
{
    protected $dirs;

    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }
    
    public function setDirs($dirs)
    {
        $this->dirs = $dirs;
    }
    
    public function loadClass($class_name)
    {
        try {
            foreach ($this->dirs as $dir) {
                $file = $dir . '/' . $class_name . '.php';
                if (is_readable($file)) {
                    require $file;

                    return;
                }
            }

            throw new CoreErrorException($class_name . '.php');
        } catch (CoreErrorException $e) {
            $e->renderFileNotFoundPage();
            
            exit();
        }
    }
}