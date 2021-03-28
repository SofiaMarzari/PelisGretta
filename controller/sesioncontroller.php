<?php

class sesioncontroller{
    public function __construct(){
        session_start();
        $usr = $_SESSION['nombreUsuario'];
        if(!isset($usr)){
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/');
            die();
        }
    }
}

?>