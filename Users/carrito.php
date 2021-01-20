<?php

$servidor="localhost";
$usuario="root";
$contraseña = "";
$bd="test";

$con = mysqli_connect($servidor,$usuario,$contraseña,$bd) 
or die("Problemas de conexion");

if(isset($_POST['carrito'])){
    
    $id = trim($_POST['id']);
    $producto= $_POST['producto'];
    $categoria= trim($_POST['categoria']);
    $precio= trim($_POST['precio']);

    $querysql= "INSERT INTO carrito (producto, categoria, precio) VALUES ('$producto', '$categoria', '$precio') WHERE id = $id";

    $resultado= mysqli_query($con,$querysql);

    echo "items añadidos al carrito";

    echo " <form method='POST'>";
    echo "<button type='submit' name='verCarrito'>Ver carrito</button> ";
    echo" </form>"; 


}else{
    echo"Algo ha ido mal";
}

if (isset($_POST['verCarrito'])){
    header('Location: verCarrito.php');

}






?>