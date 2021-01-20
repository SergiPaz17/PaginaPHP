<?php
	
session_start();

$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");

    $servidor="localhost";
	$usuario="root";
	//la contraseña es usbw con el usbwebserver de classe 
    $contraseña="";
    $bd="test";


		$nick = $_POST["nick"];
		$password = $_POST["password"];
		$correo = $_POST["correo"];
		$password2 ="";
		$permisos = "";
			
		$con = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die(mysql_error());
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	
	$instruccion = "select count(*) as cuantos from register where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}
	if($numero==0){
		header("Location: login.html");
	}
	
	else{
	$instruccion = "select contrasena as cuantos from register where contrasena = '$password'";
	$resultado = mysqli_query($con, $instruccion);

		while ($fila = $resultado->fetch_assoc()) {
			$password2=$fila["cuantos"];
		}

	if ((!strcmp($password2, $password) == 0) || $password=="") {
		header("Location: login.html");
	}
	else{

		$instruccion = "select Permisos as permisos from register where nick = '$nick'";
		$resultado = mysqli_query($con, $instruccion);

		while($fila = $resultado->fetch_assoc()){
			$usuario = $fila["permisos"];
		}
	

	if ($usuario == 1){
		$_SESSION["nick_logueado"]=$nick;
		$logueado=1;

		header("Location: ./Admin/usuario_administrador.php");

		
	}else{
		$_SESSION["nick_logueado"] = $nick;
		$logueado =1;
		header("Location: ./Users/tienda.php");
	}
}
}



?>