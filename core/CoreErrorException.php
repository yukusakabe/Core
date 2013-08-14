<?php

class CoreErrorException extends Exception {
    
    public function renderFileNotFoundPage()
    {
        echo 'File Not Found ' . $this->getMessage();
    }
    
    
    public function render404NotFoundPage()
    {
        echo '404 Not Found ' . $this->getMessage();
    }
}