<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title> Panel Administrador </title>


    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="./../Styles/styleadministrador.css">

    <!-- /Bootstrap -->
</head>

<body>

    
    <!-- Banner Pagina Web-->
    <div class="header">
      <img src="./../Images/BannerTienda.jpg" class="img-fluid" id="Banner">
    </div>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Tienda</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./../carrito.php">Carrito</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./listar_Usuarios.php">Cuentas de usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="productos.php">Productos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



    <br>
    <h1>Tienda </h1>
    <br>

    <?php

    $seleccion = 0;
    $orden = null;
  
    seleccion($seleccion,$orden);

    function seleccion($seleccion,$orden){

      echo "<div class='row container'>
      
        <form method='GET' class='ml-4'>

          <div class='input-group mb-3'>
          
            <div class='input-group-prepend'>
              
              <label class='input-group-text' for='inputGroupSelect01'> Ordenar por..... </label>
              
              
              </div>
              
              <select class='custom-select' name='seleccion'>
              
                <option value='0'> ID </option>
                <option value='1'>Producto</option>
                <option value='2'>Precio</option>
                <option value='3'>Categoria</option>
                <option value='4'>Distribuidora</option>
                
                
              </select>
              
              <input type='submit' class='btn btn-outline-success ml-2' value='Enviar'>
              
          </div>
          
        </form>
        
      </div>";


      if (is_null($_GET["seleccion"]) !=true){

        $seleccion = $_GET["seleccion"];
        listado($seleccion,$orden);
      }
      else{ 

        $seleccion = 0;
        listado($seleccion,$orden);
      }
            
    }





    function listado($seleccion,$orden){


    $servidor="localhost";
    $usuario="root";
    //la contraseña es usbw con el usbwebserver de classe
    $contraseña = "";
    $bd="test";

    $con = mysqli_connect($servidor,$usuario,$contraseña,$bd) 
    or die("Problemas de conexion");


    if ($seleccion == 0 || $seleccion == null){
      $orden = 'id';
    }
    else if ($seleccion == 1){
      $orden = 'producto';
    }
    else if ($seleccion == 2){
      $orden = 'precio';
    }
    else if($seleccion == 3){
      $orden = 'categoria';
    }
    else if($seleccion == 4){
      $orden = 'distribuidora';
    }

    
    echo "<div class='row'> ";

      echo "<table class='table table-striped ml-4 mr-4'>";

      $sqlquery = "SELECT * FROM productos WHERE 1 ORDER BY $orden";
      $resultado = mysqli_query($con,$sqlquery);

      echo "<tr>";
      echo "<th colspan='10' class='text-center'> Productos </th>";
      echo "</tr>";



      //Tabla ID Productos precio...
      echo "<tr>";
      echo "<td> ID </td>";
      echo "<td> Producto </td>";
      echo "<td> Precio </td>";
      echo "<td> Categoria </td>";
      echo "<td> Distribuidora </td>";
      echo "<td> Comprar </td>";
      echo "</tr>";

    while($fila = $resultado ->fetch_assoc()){
      
      $id = $fila["id"];
      $producto = $fila["producto"];
      $precio = $fila["precio"];
      $categoria = $fila["categoria"];
      $distribuidora = $fila["distribuidora"];

      echo "<tr>";

      echo "<td>". $id ."</td>";
      echo "<td>". $producto . "</td>";
      echo "<td>". $precio . "</td>";
      echo "<td>". $categoria . "</td>";
      echo "<td>". $distribuidora . "</td>";

      echo "<td> <a class='fas fa-shopping-cart btn' href='./../carrito.php'>Añadir al carrito</a> </td>";
      echo "</tr>";
 
    }

        echo "</table>";
      
      echo "</div>";


  }


    ?>


    <br>

  <footer> Hecha por Sergi Paz Fernandez </footer>

</body>

</html>

