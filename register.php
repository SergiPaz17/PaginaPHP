<?php

    class Usuario
    {
        // Atributos
        private $nick = null;
        private $correo = null;
        private $contrasena = null;
        private $contrasena2 = null;
            
        

        public function getNick() {
            return $this->nick;
        }

        public function setNick($nick) {
            $this->nick = $nick;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }


        public function getContrasena(){
            return $this->contrasena;
        }

        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }

        public function getContrasena2(){
            return $this->contrasena2;
        }

        public function setContrasena2($contrasena2){
            $this->contrasena2 = $contrasena2;
        }



		public function mostrarDatos() {

            header("Content-Type: text/html;charset=utf-8");

		
			echo "Nick: " . $this->getNick() . "<br>";
            echo "Apellido: " . $this->getCorreo() . "<br>";
            echo "Contraseña: " . $this->getContrasena(). "<br>";
            echo "Contraseña 2: " . $this->getContrasena2(). "<br>";

		}
    
        public function comprobar_datos(){

        //datos para la conexion a la base de datos
            $servidor="localhost";
            $usuario="root";
            $contraseña="";
            $bd="test";
            
            if (strlen($this->getNick()) < 3 ){
                die("El nick es demasiado corto");
                "<br>";
                
            }

            if (strlen($this->getCorreo()) < 4 || strlen($this->getCorreo()) >40){
                die("El correo es demasiado corto");
                "<br>";

               
            }
    
            if (strlen($this->getContrasena()) < 5){
                die ("La contraseña tiene que tener mas de 5 caracteres");
                "<br>";

            }

            if (strlen($this->getContrasena2()) < 5){
                die("La contraseña tiene que tener mas de 5 caracteres");
                "<br>";

            }

            if ($this->getContrasena() == $this->getContrasena2()){

                echo"Es la misma contraseña";
                "<br>";

            }

            if ($this->getContrasena() != $this->getContrasena2()){
            
                die("No es la misma contraseña");
                "<br>";
            }
            
            $con=mysqli_connect($servidor,$usuario,$contraseña,$bd);

            if(!$con){
            
                die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");

            }else{
	        mysqli_set_charset($con,"utf8");
            echo "Felicidades te conectaste a la BD";
            "<br>";
	        $_SESSION["con"]=$con;
            
            $consulta=mysqli_query($con,"insert into register values ('$this->nick','$this->correo','$this->contrasena','$this->contrasena2')");
            "<br>";

            echo "Datos insertados!";



        }


            
    }


}



?>