<?php

    require_once("register.php");

    //Crear Objeto (Instancia de la clase)

    $objUsuario = new Usuario();

    $objUsuario->setNick($_POST["nick"]);
    $objUsuario->setCorreo($_POST["correo"]);
    $objUsuario->setContrasena($_POST["password"]);
    $objUsuario->setContrasena2($_POST["password2"]);
    

    $objUsuario->mostrarDatos();
    
    $objUsuario->comprobar_datos();
	
?>