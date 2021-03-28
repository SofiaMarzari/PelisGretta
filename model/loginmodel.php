<?php

    class loginmodel{
        
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost; dbname=peliculas', 'root', '');
        }

        public function buscarExistenciaUsr($nomIngresado){
            $data = $this->db->prepare("SELECT * FROM usuario WHERE usuarioNombre=?");
            $data->execute(array($nomIngresado));
            $result = $data->fetchAll();
            return $result;
        }

        public function guardarUsuarioNuevo($nom, $mail, $clave){
            $password = password_hash($clave, PASSWORD_DEFAULT);
            $data = $this->db->prepare("INSERT INTO usuario(usuarioNombre, password, mail) VALUES(?,?,?)");
            $data->execute(array($nom, $password, $mail));
        }

        public function modificarPassword($nomUsr, $newpassword){
            $password = password_hash($newpassword, PASSWORD_DEFAULT);
            $data = $this->db->prepare("UPDATE usuario SET password=? WHERE usuarioNombre=?");
            $data->execute(array($password, $nomUsr));
        }
    }

?>

