<?php

    class homeController {
        private $MODEL;
        public function __construct(){

            require_once("c://xampp/htdocs/login/model/homeModel.php");
            $this->MODEL = new homeModel();

        }
        // valor correspondiente para guardar la funcion 
        public function guardarUsuario($correo,$contraseña){
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarcorreo($correo),$this->encriptarcontraseña($this->limpiarcadena($contraseña)));
            return $valor;

        }      

        public function limpiarcadena($campo){ //esto limbia lo que estamos enviando en formulario creamos la funcion para limpisr el correo 
            $campo = strip_tags($campo); //funcion de php
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function limpiarcorreo($campo){ //esto limbia lo que estamos enviando en formulario creamos la funcion para limpisr el correo 
            $campo = strip_tags($campo); //funcion de php
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        // funcion para encriptar
        public function encriptarcontraseña($contraseña){
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }


        public function verificarusuario($correo,$contraseña){
            $keydb = $this->MODEL->obtenerclave($correo);
            return (password_verify($contraseña,$keydb)) ? true : false;
        }
    
   


}

?>

