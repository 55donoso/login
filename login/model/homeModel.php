<?php

    class homeModel{ // creamos una clase 
        private $PDO; //variable privada con el valor 
        public function __construct() { // agregamos un constructor 
            require_once("c://xampp/htdocs/login/config/db.php");// enlasa la concesion con la base de datos
            $pdo = new db();// nuevo objeto
            $this->PDO = $pdo->conexion();//acedemos a la funcion que retorna el objeto pdo
        }
        public function agregarNuevoUsuario($correo,$password){// agregamos una funcion para poder agregar un nuevo usuario
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo, :password)");//Creamos la sentencia sql para poder registrar un nuevo usuario
            $statement -> bindParam(":correo",$correo);//aqui pasamos los atributos que estan arriba 
            $statement -> bindParam("password",$password);
            try {
                $statement->execute();// colocamos un return para saber si se ejecuta o no
                return true;
            }catch (PDOException $e) {
                return false;
            }
        }



    public function obtenerclave($correo) {
        $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
        $statement -> bindParam(":correo",$correo);
        return ($statement -> execute()) ? $statement->fetch()['password'] : false;
        
    }

           
    }

?>