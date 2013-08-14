<?php

class CoreTe
{
    protected $dirs;
    
    function setDirs($dirs)
    {
        $this->dirs = $dirs;
    }
            
    function combine($tpl, $params)
    {
        try {
            foreach($this->dirs as $dir) {
                $file = $dir . '/' . $tpl . '.tpl';
                if (is_readable($file)) {
                    $html = file_get_contents($file);

                    return preg_replace('!{\$(.*)}!', $params , $html);
                }
            }
            
            throw new CoreErrorException($tpl . '.tpl');
        } catch (CoreErrorException $e) {
            $e->renderFileNotFoundPage();
            
            exit();
        }
    }
}