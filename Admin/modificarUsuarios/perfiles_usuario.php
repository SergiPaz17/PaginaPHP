
    <?php 


    //la contraseña es usbw con el usbwebserver de classe
    $servidor="localhost";
    $usuario="root";
    $contraseña = "usbw";
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
            
        
        }


    ?>


    </body>
</html>