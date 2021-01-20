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
          <a class="navbar-brand" href="usuario_administrador.php">Tienda</a>
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
                <a class="nav-link active" href="#">Cuentas de usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="productos.php">Productos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



    <br>
    <h1>Cuentas de usuario </h1>
    <br>


    <?php 



    $servidor="localhost";
    $usuario="root";
    //la contraseña es usbw con el usbwebserver de classe
    $contraseña = "";
    $bd="test";

    $con = mysqli_connect($servidor,$usuario,$contraseña,$bd)
    or die("Problemas de conexion");

        $query= "SELECT * FROM register";
        $result = mysqli_query($con,$query);
  
       

        while($datos = $result ->fetch_assoc()){

            $id = $datos["id"];
            $nick = $datos["nick"];
            $correo = $datos["correo"];
            $contraseña = $datos["contrasena"];


          echo "<form>

          <div class='mb-3 mx-sm-5' >

            <label for='exampleInputEmail1' class='form-label'>Nick</label>
            <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' value='".$nick."'>

          </div>

          <div class='mb-3 mx-sm-5'>
            <label for='exampleInputPassword1' class='form-label'>Correo</label>
            <input type='email' class='form-control' id='exampleInputPassword1' value='".$correo."'>
          </div>

          <div class='mb-3 mx-sm-5'>
            <label for='exampleInputPassword1' class='form-label'>Password</label>
            <input type='password' class='form-control' id='exampleInputPassword1' value='".$contraseña."'>
          </div>

          

          <button type='submit' class='btn btn-outline-primary mb-3 col-sm-5 mx-sm-5'>Modificar </button>
          <button type='submit' class='btn btn-outline-danger mb-3 col-sm-5 mx-sm-5'>Eliminar</button>

        </form>";
        }
            

        

    ?>


    </body>
</html>