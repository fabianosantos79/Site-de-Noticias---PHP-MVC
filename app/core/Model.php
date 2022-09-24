<?php

    namespace app\core;

    class Model{

        private static $instance;

        public function getConn(){
            if(!isset(self::$instance)){
                self::$instance = new \PDO('mysql:host=localhost;dbname=noticias_mvc;charset=utf8', 'root', '');
            }
            return self::$instance;
        }
    }