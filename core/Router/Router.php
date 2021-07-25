<?php

namespace Core;

class Router {
    public function __construct() {
        $configRoute = require_once "config/routes.php";
        $uri = substr(trim($_SERVER['REQUEST_URI']), 1);

        if( !empty($configRoute) && ($uri !== "") && array_key_exists($uri, $configRoute) ) {
            
        }
    }
}