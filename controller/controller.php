<?php
    require_once('view/view.php');
    require_once('model/model.php');

   class controller{
    
    private $view;
    private $model;
    private $listgeneros;

    public function __construct(){
        $this->view = new view();
        $this->model = new model();
        $this->listgeneros = $this->pedirGeneros();
    }

    public function pedirGeneros(){
        $listGeneros = $this->model->getGeneros();
        return $listGeneros;
    }

    public function mostrarHome(){
        $peliculas = $this->model->getPeliculas();
        $this->view->verHome($this->listgeneros, $peliculas);
    }

    public function verPelicula($idPelicula){
        $pelicula = $this->model->getPelicula($idPelicula);
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
            $nomAdmin = $_SESSION['nombreUsuario'];
        }else{
            $admin = false;
            $nomAdmin = null;
        }
        $this->view->verPelicula($this->listgeneros, $pelicula, $admin, $nomAdmin);
    }

    public function mostrarNoticias(){
        $this->view->verNoticias($this->listgeneros);
    }

    public function mostrarGenero($idGenero){
        $result = $this->model->getPeliculasGenero($idGenero);
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
        }else{
            $admin = false;
        }
        $this->view->verPeliculasPorGenero($result, $this->listgeneros, $admin);
    }

  
    public function buscarGenero($id){
        $result = $this->model->getIdGenero($id);
        if(isset($result[0])){
            $this->mostrarGenero($id);
        }
    }

    public function mostrarLogin(){
        session_start();
        if(isset($_SESSION['nombreUsuario'])){
            $admin = true;
        }else{
            $admin = false;
        }
        $this->view->verLogin($this->listgeneros, $admin);
    }

   }
?>