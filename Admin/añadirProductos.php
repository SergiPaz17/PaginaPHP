<?php 

$servidor="localhost";
$usuario="root";
$contraseña = "";
$bd="test";

$con = mysqli_connect($servidor,$usuario,$contraseña,$bd) 
or die("Problemas de conexion");


if(isset($_POST['enviar'])){

$nombre = trim($_POST['producto']);
$distribuidora= trim($_POST['distribuidora']);
$precio= trim($_POST['precio']);
$categoria= trim($_POST['categoria']);

$queryinsert= "INSERT INTO productos(producto, categoria, precio, distribuidora) VALUES ('$nombre','$categoria','$precio','$distribuidora')";

$result = mysqli_query($con,$queryinsert);
echo "Se ha insertado correctamente";

echo "<form method='POST'>";
    echo "<button type='submit' name='volver' class='btn btn-outline-primary mb-3 col-sm-5 mx-sm-5'>Volver a la lista de productos</button> ";
    echo" </form>"; 

}else{
    echo"Algo ha salido mal";
}

if(isset($_POST['volver'])){
    header('Location: productos.php');
}






?>