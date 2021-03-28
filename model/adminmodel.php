<?php

    class adminmodel{
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost; dbname=peliculas', 'root', '');
        }

        public function getGenero($nombreGenero){
            $data = $this->db->prepare("SELECT id_genero FROM genero WHERE nombre=?");
            $data->execute(array($nombreGenero));
            $result = $data->fetchAll();
            return $result;
        }

        public function getPelicula($nombrePelicula){
            $data = $this->db->prepare("SELECT * FROM pelicula WHERE nombre=?");
            $data->execute(array($nombrePelicula));
            $result = $data->fetchAll();
            return $result;
        }

        public function getPeliculaId($idPelicula){
            $data = $this->db->prepare("SELECT * FROM pelicula WHERE id_pelicula=?");
            $data->execute(array($idPelicula));
            $result = $data->fetchAll();
            return $result;
        }

        public function addGenero($nombre){
            $data = $this->db->prepare("INSERT INTO genero(nombre) VALUES (?)");
            $data->execute(array($nombre));
        }

        public function addPelicula($nombre, $descripcion, $idGenero, $dur, $an, $nomTempImg){
            $duracion = intVal($dur);
            $anio = intVal($an);
            $filePath = "css/img/".uniqid("",true).".".strtolower(pathinfo($_FILES['img_input']['name'], PATHINFO_EXTENSION));
            move_uploaded_file($nomTempImg, $filePath);
            $data = $this->db->prepare("INSERT INTO pelicula(nombre, id_genero, descripcion, duracion, anio, imagen) VALUES(?,?,?,?,?,?)");
            $data->execute(array($nombre, $idGenero, $descripcion, $duracion, $anio, $filePath));
        }

        public function deletePelicula($id){
            $consult = $this->db->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
            $consult->execute(array($id));
        }

        
        public function addComentario($comentario, $idPeli, $idUsr){
            $data = $this->db->prepare("INSERT INTO comentario(comentario, id_usuario, id_pelicula) VALUES(?,?,?)");
            $data->execute(array($comentario, $idUsr, $idPeli));
        }
       

        public function getComentarios(){
            $datos = $this->db->prepare("SELECT * FROM comentario");
            $datos->execute();
            $result = $datos->fetchAll();
            return $result;
        }


    }

?>