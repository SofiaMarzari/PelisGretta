<?php
    require_once('model/loginmodel.php');
   
class logincontroller{
    
    private $model;

    public function __construct(){
        $this->model = new loginmodel();
    }

    public function verificarUsr(){
        $nomUsr = $_POST['nombre'];
        $clave = $_POST['clave'];

        $existeUsr = $this->model->buscarExistenciaUsr($nomUsr);
        if(isset($existeUsr)){
            if(password_verify($clave, $existeUsr[0]['password'])){
                session_start();
                $_SESSION['nombreUsuario'] = $nomUsr;
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/admin');
            }else{
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
            }
        }else{
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }
    }

    public function olvidePassword(){
        $usr = $_POST['nombre'];

        $existeUsr = $this->model->buscarExistenciaUsr($usr);
        if(isset($existeUsr)){
            $mailUsr = $existeUsr[0]['mail'];
            $this->restaurarPassword($mailUsr);
        }
    }

    public function restaurarPassword($destinatario){
        
    }

    public function registrarUsrNuevo(){
        $nomUsr = $_POST['nombre'];
        $clave = $_POST['clave'];
        $mail = $_POST['mail'];
        $existencia = $this->model->buscarExistenciaUsr($nomUsr);
        if(isset($existencia[0])){
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }else{
            $this->model->guardarUsuarioNuevo($nomUsr, $mail, $clave);
        }
    }

    public function deslog(){
        session_start();
        session_destroy();
        header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/');
    }

}

?>