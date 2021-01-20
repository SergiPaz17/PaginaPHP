<?php

    $id=$_GET['id'];


    $servidor="localhost";
    $usuario="root";
    $contraseña = "";
    $bd="test";

    $con = mysqli_connect($servidor, $usuario, $contraseña, $bd);

    if(!$con){
        
        die("La conexion ha fallado ". mysqli_connect_error(). "<br>");


    }else {
        mysqli_set_charset($con,"utf8");
    }


    $resultado ="SELECT * FROM usuarios WHERE id='$id'";
    $sqlquery = mysqli_query($con, $resultado);

    while($sql = $resultado->fetch_assoc()){

        $id = $sql["id"];
        $nick = $sql["nick"];
        $correo = $sql["correo"];
        $contrasena = $sql["contrasena"];


        echo "<form action='./principal-modificacion.php?id=$id' method='post' class='container'>
	
        <div class='col-left'>
    
            <div class='form-group'>
                <input type='text' class='form-control' id='exampleInputNickname' name='nickname' value='".$nickname."' placeholder='Nickname'>
            </div>
            
            <div class='form-group'>
                <input type='text' class='form-control' id='exampleInputDni' name='dni' value='".$dni."' placeholder='DNI'>
            </div>
            
            <div class='form-group'>
                <input type='tel' step='any' class='form-control' id='exampleInputTelefono' name='telefono' value='".$telefono."' placeholder='Telefono'>
            </div>
        
        </div>
    
        <div class='col-right'>
    
            <div class='form-group'>
                <input type='text' class='form-control' id='exampleInputNombre' name='nombre' value='".$nombre."' placeholder='Nombre'>
            </div>
            
            <div class='form-group'>
                <input type='text' class='form-control' id='exampleInputApellidos' name='apellidos' value='".$apellidos."' placeholder='Apellidos'>
            </div>
            
            <div class='form-group'>
                <input type='number' class='form-control' id='exampleInputEdad' name='edad' value='".$edad."' placeholder='Edad'>
            </div>
        
        </div>
        <div class='form-group one-column'>
            <input type='mail' class='form-control' id='exampleInputEmail' name='correo' value='".$correo."' placeholder='Correo'>
        </div>
    
        <div>
            <div class='col-left'>
                <button type='submit' class='btn btn-outline-success btn-block'>Guardar</button>
            </div>
            <div class='col-right'>
                <a class='btn btn-outline-danger btn-block' id='hov-cancelar' href='./../usuarios-administrador.php'>Cancelar</a>
            </div>
        
        </div>
        
    </form>";
    
    }






?>