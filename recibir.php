<!-- Esto es la conexion al servidor y recepcion de los datos en la DB, capturados por el formulario -->
<!-- Por ultimo para mostrar los datos usamos el método que más nos convenga. -->


<?php
//conexion a la base de datos
$con = mysqli_connect("localhost", "root", "", "movies_cac")
    or die("Error en la conexion servidor");

//query para insertar los datos en la tabla 'user'
$sql = "INSERT INTO user (name, surname, email, password, date, country) 
VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]', '$_POST[date]', '$_POST[country]')";

//ejecutar la query
$result = mysqli_query($con, $sql) or die("Error en el query de base de datos");

mysqli_close($con);
//validaciones de envio

/**
 * $_SERVER["REQUEST_METHOD"] es una variable superglobal que se utiliza para recopilar datos de formularios HTML.
 * @htmlspecialchars() se utiliza para convertir caracteres especiales en entidades HTML.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $date = htmlspecialchars($_POST['date']);
    $country = htmlspecialchars($_POST['country']);

    //en caso de necesitar mostrar los datos capturados
    echo "Nombre recibido: " . $name;
    echo "<br>";

    //redireccionar a la pagina de gracias (NOTA: no se ven los datos como 'echo ...' por la redireccion)
    header("Location: gracias.php");
    exit();
} else {
    echo "Acceso no permitido.";
}


?>