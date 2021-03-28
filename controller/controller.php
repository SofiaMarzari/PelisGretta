<?php
    require_once('view/view.php');
    require_once('model/model.php');

   class controller{
    
    private $view;
    private $model;

    public function __construct(){
        $this->view = new view();
        $this->model = new model();
    }

    public function mostrarHome(){
        $listGeneros = $this->model->getGeneros();
        $peliculas = $this->model->getPeliculas();
        $this->view->verHome($listGeneros, $peliculas);
    }

    public function verPelicula($idPelicula){
        $listGeneros = $this->model->getGeneros();
        $pelicula = $this->model->getPelicula($idPelicula);
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
            $nomAdmin = $_SESSION['nombreUsuario'];
        }else{
            $admin = false;
            $nomAdmin = null;
        }
        $this->view->verPelicula($listGeneros, $pelicula, $admin, $nomAdmin);
    }

    public function mostrarNoticias(){
        $listGeneros = $this->model->getGeneros();
        $this->view->verNoticias($listGeneros);
    }

    public function mostrarGenero($idGenero){
        $listGeneros = $this->model->getGeneros();
        $result = $this->model->getPeliculasGenero($idGenero);
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
        }else{
            $admin = false;
        }
        $this->view->verPeliculasPorGenero($result, $listGeneros, $admin);
    }

  
    public function buscarGenero($id){
        $result = $this->model->getIdGenero($id);
        if(isset($result[0])){
            $this->mostrarGenero($id);
        }
    }

    public function mostrarLogin(){
        $listGeneros = $this->model->getGeneros();
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
        }else{
            $admin = false;
        }
        $this->view->verLogin($listGeneros, $admin);
    }

   }
?>