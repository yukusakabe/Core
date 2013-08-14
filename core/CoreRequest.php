<?php

class CoreRequest
{
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        
        return false;
    }
    
    public function getGet($key)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        
        return null;
    }
    
    public function getPost($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        
        return null;
    }
    
    public function getHost()
    {
        if (!empty($_SERVER['HTTP_HOST'])) {
            return $_SERVER['HTTP_HOST'];
        }
        
        return $_SERVER['SERVER_NAME'];
    }
    
    public function isSsl()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            return true;
        }
        
        return false;
    }
    
    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
