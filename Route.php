<?php
    class Route{
        private $base_path ;
        private $uri;
        private $base_url;
        public function __construct(){
            
        }
        public function clean_route(){
            $this->base_path = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1));
            $this->uri = substr($_SERVER['REQUEST_URI'], strlen($this->base_path));
            if (strstr($this->uri, '?')) $this->uri = substr($this->uri, 0, strpos($this->uri, '?'));
            $this->uri = '/' . trim($this->uri, '/');
            return  $this->uri;
            
        }
        public function getRoute(){
            
        }
    }