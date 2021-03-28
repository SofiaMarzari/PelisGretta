<?php
    require_once("ruteoApi.php");

    class Ruteador{
        public $url;
        public $metodo;
        public $controller;
        public $accion;
        public $params;

        public function __construct($url, $metodo, $controller, $accion){
            $this->url = $url;
            $this->metodo = $metodo;
            $this->controller = $controller;
            $this->accion = $accion;
            $this->params = [];
        }

        public function match($url, $metodo){
            if($this->metodo != $metodo){
                return false;
            }

            $partsURL = explode('/', trim($url, '/'));
            $partsRoute = explode('/', trim($this->url, '/'));
            
            if(count($partsRoute) != count($partsURL)){
                return false;
            }

            foreach($partsRoute as $clave=>$valor){
                if($valor[0] != ':'){
                    if($valor != $partsURL[$clave]){
                        return false;
                    }
                }
                if($valor[0] == ':'){
                    $this->params[$valor] = $partsURL[$clave];
                }
            }
            return true;
        }
        public function run(){
            $controller = $this->controller;
            $accion = $this->accion;
            $params = $this->params;
            (new $controller())->$accion($params);
        }

    }

    class Router{
        private $routeTable = [];

        public function addRoute($url, $metodo, $controller, $accion){
            $this->routeTable[] = new Ruteador($url, $metodo, $controller, $accion); 
        }

        public function route($url, $metodo){
            foreach($this->routeTable as $route){
                if($route->match($url, $metodo)){
                    return $route->run();
                }
            }
        }
    }

   
?>