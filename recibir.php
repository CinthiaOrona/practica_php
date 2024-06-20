<!-- Esto es la conexion al servidor y recepcion de los datos en la DB, capturados por el formulario -->
<!-- Por ultimo para mostrar los datos usamos el método que más nos convenga. -->


<?php

$con = mysqli_connect("localhost", "root", "", "movies_cac")
    or die("Error en la conexion servidor");

$sql = "INSERT INTO user (name, surname, email, password, date, country) 
VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]', '$_POST[date]', '$_POST[country]')";

$result = mysqli_query($con, $sql) or die("Error en el query de base de datos");

mysqli_close($con);

//TODO: Si se quiere mostrar los datos capturados en el formulario, es necesario hacerlo en este archivo


?>


<!--  
//!! MANERA BASICA DE MOSTRAR DATOS CAPTADOS POR EL SERVER EN TEXTO PLANO
// echo "<p>El nombre es: $_POST[name] </p><br>";
// echo "El apellido es: $_POST[surname] <br>";
// echo "El email es: $_POST[email] <br>";
// echo "La contraseña es: $_POST[password] <br>";
// echo "La fecha es: $_POST[date] <br>";
// echo "El pais es: $_POST[country] <br>";
-->

<!-- 
//!! MANERA DE MOSTRAR DATOS CAPTADOS POR EL SERVER EN UN ARRAY
    //?? Esto muestra los datos en un array
    // print_r($_POST);
 -->