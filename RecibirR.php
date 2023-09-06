<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Guardado</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="estilos.css">


</head>

<body>
<main class="Contenido">
<?php

    error_reporting(0);

    if($_POST){
        $Nombre=$_POST['Nombre'];
        $Apellidos=$_POST['Apellidos'];
        $Correo=$_POST['Correo'];
        $Password=$_POST['Pass'];
        $Direccion=$_POST['Direccion'];



        echo "El nombre es: ".$Nombre;
        echo "<br>Tus apellidos son ".$Apellidos;
        echo "<br>Tu correo es: ".$Correo;
        echo "<br>Tu dirrecion es: ".$Direccion;
        echo "<br>Tu Password es: ".$Password;

        #conectamos con MySQL
        $conexion = mysqli_connect("localhost","videogames","20e5bd8da")
        or die ("Fallo en la conexion");


        mysqli_select_db($conexion, "videogames")
        or die ("Error en el seleccion de la base de datos");

        #consulta para insertar
        $Resultado="INSERT INTO `registro` (`id`, `nombre_u`, `apellidos_u`,
        `correo_u`, `direccion_u`, `password_u`)
        VALUES (NULL, '$Nombre', '$Apellidos', '$Correo', '$Direccion',  '$Password')";

        if($conexion->query($Resultado) === true){
            $_SESSION["usuario"]=$usuario;
            include("../index.php");
          }
        if($Resultado==true){
            echo "\n se recibio los datos.\n";
            echo'<META HTTP-EQUIV="REFRESH" CONTENT="15; URL=index.php">';
            include("index.php");  
        }else echo "Error en la consulta";
        mysqli_close($conexion);


    }else{
        echo "No ejecuta";
        echo'META HTTP-EQUIV="REFRESH" CONTENT = "5;URL=index.php">';
    }
?>
</main>
</body>
</html>
