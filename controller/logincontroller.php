<?php
    require_once('model/loginmodel.php');
    require_once('view/view.php');
    require_once('controller/controller.php');
   
class logincontroller{
    
    private $model;
    private $view;
    private $codigoRecuperacion;
    private $nomUsr;
    private $controller;

    public function __construct(){
        $this->model = new loginmodel();
        $this->view = new view();
        $this->controller = new controller();
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
        $usr = $_POST['usuario'];

        $existeUsr = $this->model->buscarExistenciaUsr($usr);
        if(isset($existeUsr)){
            $this->nomUsr = $usr;
            $mailUsr = $existeUsr[0]['mail'];
            $this->restaurarPassword($mailUsr);
        }
    }

    public function mostrarOlvidePassword(){
        $this->view->verOlvidePassword($this->controller->pedirGeneros());
    }

    public function restaurarPassword($destinatario){
        $random = 0;
        $this->codigoRecuperacion = random_int(1000, 9999);
        mail($destinatario, "Recuperar contraseña", $this->codigoRecuperacion);
    }

    public function validarCodigoRecuperacion(){
        $codIngr = $_POST['codRecuperacionIngr'];

        if(isset($codIngr)){
            if($codIngr == $this->codigoRecuperacion){
                $this->view->verNuevaContraseña($this->controller->pedirGeneros());
            }
        }
    }

    public function cambiarContraseña(){
        $nuevaPassword = $_POST['claveNueva'];
        $usr = $_POST['usr'];
        $existeUsr = $this->model->buscarExistenciaUsr($usr);
        if(isset($existeUsr)){
            $this->model->modificarPassword($usr, $nuevaPassword);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/login');
        }
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