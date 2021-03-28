<?php

    require_once('model/adminmodel.php');
    require_once('model/model.php');
    require_once('controller/sesioncontroller.php');
    require_once('view/view.php');

    class admincontroller extends sesioncontroller{

        private $modelAdmin;
        private $modelLogin;
        private $model;
        private $view;

        public function __construct(){
            parent::__construct();
            $this->modelAdmin = new adminmodel();
            $this->modelLogin = new loginmodel();
            $this->model = new model();
            $this->view = new view();
        }

        public function inicioAdmin(){
            $listGeneros = $this->model->getGeneros();
            $peliculas = $this->model->getPeliculas();
            $this->view->verInicioAdmin($listGeneros, $peliculas);
        }

        public function mostrarAdd(){
            $listGeneros = $this->model->getGeneros();
            $this->view->verAddAdmin($listGeneros);
        }

        public function addPelicula(){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $nomGenero = $_POST['genero'];
            $duracion = $_POST['duracion'];
            $anio = $_POST['anio'];

            $existeGenero = $this->modelAdmin->getGenero($nomGenero);
            $existePelicula = $this->modelAdmin->getPelicula($nombre);

            if(!isset($existePelicula[0])){
                if(isset($existeGenero[0])){
                    $idGenero = $existeGenero[0]['id_genero'];
                    if(($_FILES['img_input']['type']=="image/jpg")||($_FILES['img_input']['type']=="image/jpeg")||($_FILES['img_input']['type']=="image/png")){
                        $this->modelAdmin->addPelicula($nombre, $descripcion, $idGenero, $duracion, $anio, $_FILES['img_input']['tmp_name']);
                        header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/admin');
                    }   
                }
            }
        }

        public function addGenero(){
            $nombre = $_POST['nombre'];
            $existe = $this->modelAdmin->getGenero($nombre);
            if(!isset($existe[0])){
                $this->modelAdmin->addGenero($nombre);
                header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/admin');
            }
        }

        public function deletePelicula($id){
            $this->modelAdmin->deletePelicula($id);
            header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/admin');
        }

        
        public function agregarComentario($idPeli){
            $coment = $_POST['comentario'];
            session_start();
            $nomUsr = $_SESSION['nombreUsuario'];
            if(isset($coment)){
                $existePeli = $this->modelAdmin->getPeliculaId($idPeli);
                $idUsr = $this->modelLogin->buscarExistenciaUsr($nomUsr);
                if(isset($existePeli)){
                    $this->modelAdmin->addComentario($coment, $idPeli, $idUsr[0]['id_usuario']);
                    header('Location: http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']). '/pelicula/'.$idPeli);
                }
            }
        }
    
    }

?>