<?php
    require_once("Router.php");
    require_once("api/apicontroller/apicontroller.php");

    $resource = $_GET['resource'];
    $metodo = $_SERVER['REQUEST_METHOD'];

    $router = new Router();

    $router->addRoute('comentarios','GET','apicontroller','getcomentarios');
    $router->addRoute('comentarios', 'POST', 'apicontroller', 'addcomentario');

    $router->route($resource, $metodo);

?>