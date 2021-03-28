<?php
    require_once('controller/controller.php');
    require_once('controller/sesioncontroller.php');
    require_once('controller/logincontroller.php');
    require_once('controller/admincontroller.php');
    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
    
    $action = $_GET['resource'];

    $partesURL = explode("/", $action);

    switch($partesURL[0]){
        case '':
            $controller = new controller();
            $controller->mostrarHome();
            break;
        case 'home':
            $controller = new controller();
            $controller->mostrarHome();
            break;
        case 'login':
            $controller = new controller();
            $controller->mostrarLogin();
            break;
        case 'genero':
            $controller = new controller();
            $controller->buscarGenero($partesURL[1]);
            break;
        case 'pelicula':
            $controller = new controller();
            $controller->verPelicula($partesURL[1]);
            break;
        case 'registrar':
            $controller = new logincontroller();
            $controller->registrarUsrNuevo();
            break;
        case 'ingresar':
            $controller = new logincontroller();
            $controller->verificarUsr();
            break;
        case 'olvidePassword':
            $controller = new logincontroller();
            $controller->mostrarOlvidePassword();
            break;
        case 'validarcodigo':
            $controller = new logincontroller();
            $controller->validarCodigoRecuperacion();
            break;
        case 'recuperarContraseña':
            $controller = new logincontroller();
            $controller->olvidePassword();
            break;
        case 'nuevaPassword':
            $controller = new logincontroller();
            $controller->cambiarContraseña();
            break;
        case 'admin':
            $controller = new admincontroller();
            $controller->inicioAdmin();
            break;  
        case 'salir':
            $controller = new logincontroller();
            $controller->deslog();
            break;
        case 'verAgregar':
            $controller = new admincontroller();
            $controller->inicioAdmin();
            break;
        case 'addPelicula':
            $controller = new admincontroller();
            $controller->addPelicula();
            break;
        case 'addGenero':
            $controller = new admincontroller();
            $controller->addGenero();
            break;
        case 'delete':
            $controller = new admincontroller();
            $controller->deletePelicula($partesURL[1]);
            break;
        case 'comentar':
            $controller = new admincontroller();
            $controller->agregarComentario($partesURL[1]);
            break;
    }

   
?>