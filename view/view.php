<?php
    require_once('libs/Smarty.class.php');

    class view{

        private $smarty;
        
        public function verHome($generos, $pelis){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('listaPeliculas', $pelis);
            $this->smarty->assign('admin', false);
            $this->smarty->display('templates/inicio.tpl');
        }

        public function verInicioAdmin($generos, $pelis){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('listaPeliculas', $pelis);
            $this->smarty->assign('admin', true);
            $this->smarty->display('templates/inicio.tpl');
        }

        public function verNoticias($generos){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('admin', true);
            $this->smarty->display('templates/noticias.tpl');
        }

        public function verPeliculasPorGenero($result, $generos, $admin){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('listaPelis', $result);
            $this->smarty->assign('admin', $admin);
            $this->smarty->display('templates/itemgenero.tpl');
        }

        public function verPelicula($result, $peli, $admin, $nomUsr){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $result);
            $this->smarty->assign('pelicula', $peli);
            $this->smarty->assign('admin', $admin);
            $this->smarty->assign('nomUsr', $nomUsr);
            $this->smarty->display('templates/pelicula.tpl');
        }

        public function verLogin($generos, $admin){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('admin', $admin);
            $this->smarty->display('templates/login.tpl');
        }

        public function verNuevaContraseña($generos){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('admin', false);
            $this->smarty->display('template/nuevaContraseña.tpl');
        }

        public function verOlvidePassword($generos){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('admin', false);
            $this->smarty->display('templates/recuperarCont.tpl');
        }
        
        public function verAddAdmin($generos){
            $this->smarty = new Smarty();
            $this->smarty->assign('listaGeneros', $generos);
            $this->smarty->assign('admin', true);
            $this->smarty->display('templates/addAdmin.tpl');
        }
    }

?>