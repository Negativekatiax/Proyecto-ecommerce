
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8"/>
<link rel="stylesheet" type="text/css" href="css/estiloProyecto.css">
<title> Cerrando la sesion</title>

</head>

<body>
<?php

session_start();
session_destroy();
echo "Saliendo\n";
echo '<META HTTP-EQUIV = "REFRESH" CONTENT = "5;URL=../index.php">';

?>


</body>
</html> 