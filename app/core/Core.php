<?php

namespace app\core;

class Core{

        protected $controller = 'home';
        protected $method = 'index';
        protected $params = [];

        public function __construct() {

           $url = $this->parseUrl();
           //print_r($url);

           if(file_exists('app/controllers/'.$url[1].'Controller.php')){
                $this->controller = $url[1];
                unset($url[1]);
           }

           require_once 'app/controllers/'.$this->controller.'Controller.php';
           $this->controller = new $this->controller;

           if(isset($url[2])){
                if(method_exists($this->controller, $url[2])){
                    $this->method = $url[2];
                    unset($url[2]);
                    unset($url[0]);
                }
           }

           $this->params = $url ? array_values($url) : [];

           call_user_func_array([$this->controller, $this->method], $this->params);

        }



        public function parseUrl(){
            return explode('/', $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
        }

}