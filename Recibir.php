<?php
//iniciar variable de la sesion
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8"/>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" href="estilos.css">
<title>Guardar Datos</title>

</head>

<body>
<?php

if ($_POST) {
    $Nombre=$_POST['Nombre'];
    $Password=$_POST['Pass'];

    echo $Nombre;
    echo "<br>".$Password;

    #Conectamos con MySQL
    $conexion = mysqli_connect("localhost","videogames","20e5bd8da")
    or die ("Error en la conexion");

    #Seleccionamos la base de datos a utilizar
    mysqli_select_db($conexion, "videogames")
    or die ("Error en el seleccion de la base de datos");

    $Resultado = mysqli_query($conexion, "SELECT * FROM `registro` WHERE `nombre_u` = '$Nombre' and `password_u` = '$Password';");

    if (mysqli_num_rows($Resultado)==1) {
        echo '<span class = "Etiquetas"><br>!Bienvenido! </span>';
        
        #Crear variable de sesion
        $_SESSION["usuario"] = "$Nombre";
        $_SESSION["Enter"] = date("Y-m-j H:i:s");

        echo '<META HTTP-EQUIV ="REFRESH" CONTENT="5;URL=index.php">';

    }else{
        echo "No Aceptado";
        echo '<META HTTP-EQUIV ="REFRESH" CONTENT="5;URL=index.php">';
    }
    mysqli_close($conexion);
}

?>

</body>
</html> 