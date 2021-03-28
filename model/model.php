<?php

    class model{
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost; dbname=peliculas', 'root', '');
        }

        public function getIdgenero($id){
            $data = $this->db->prepare("SELECT id_genero FROM genero WHERE id_genero=?");
            $data->execute(array($id));
            $result = $data->fetchAll();
            return $result;
        }

        public function getPeliculasGenero($idGenero){
            $data = $this->db->prepare("SELECT * FROM pelicula WHERE id_genero=?");
            $data->execute(array($idGenero));
            $result = $data->fetchAll();
            return $result;
        }

        public function getPeliculas(){
            $data = $this->db->prepare("SELECT * FROM pelicula");
            $data->execute();
            $result = $data->fetchAll();
            return $result;
        }

        public function getPelicula($id){
            $data = $this->db->prepare("SELECT * FROM pelicula WHERE id_pelicula=?");
            $data->execute(array($id));
            $result = $data->fetchAll();
            return $result;
        }

        public function getGeneros(){
            $data = $this->db->prepare("SELECT * FROM genero");
            $data->execute();
            $result = $data->fetchAll();
            return $result;
        }
 

        

    }
?>