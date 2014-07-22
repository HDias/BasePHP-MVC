<?php

namespace App\Core;

class App {
    
    protected $controller = 'index';
    
    protected $action = 'index';
    
    protected $params = [];
	
	public function __construct()
	{
		print_r($this->parseUrl());
	}
	public function parseUrl()
	{
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $urlArray = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
        unset($urlArray[0]);
        return array_values($urlArray);
	}
}