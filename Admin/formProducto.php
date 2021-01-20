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
                <a class="nav-link active" href="listar_Usuarios.php">Cuentas de usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="productos.php">Productos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



    <br>
    <h1> Añadir producto </h1>
    <br>


  <form action="añadirProductos.php" method="post">
    <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del producto</label>
    <input type="text" class="form-control" name="producto" placeholder="Introduzca el nombre que quiere que tenga el producto">
  </div>
<br>
  <div class="form-group">
    <label>Categoria del producto</label>
    <input type="text" class="form-control" name="categoria" placeholder="Que categoria tiene el producto">
  </div>

<br>
  
<div class="form-group">
    <label >Precio del producto</label>
    <input type="number" class="form-control" name="precio" placeholder="Que precio tiene el productos">
  </div>

  <br>

  <div class="form-group">
    <label >Distribuidora del producto</label>
    <input type="text" class="form-control" name="distribuidora" placeholder="Que distribuidora tiene el producto">
  </div>
  
  <br>

  <input type="submit" name="enviar" class="btn btn-outline-primary mb-3 col-sm-5 mx-sm-5">Añadir producto
</form>

