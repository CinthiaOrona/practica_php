<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>

<body>
    <?php
    //conexion a la base de datos
    $con = mysqli_connect("localhost", "root", "", "movies_cac")
        or die("Error en la conexion servidor");

    //query para insertar los datos en la tabla 'user'
    $sql = "INSERT INTO user (name, surname, email, password, date, country) 
VALUES ('$_POST[name]', '$_POST[surname]', '$_POST[email]', '$_POST[password]', '$_POST[date]', '$_POST[country]')";


    $result = mysqli_query($con, $sql) or die("Error en el query de base de datos");
    ?>

    <!-- Mostramos los datos recibidos del formulario (o no) con formato HTML -->
    <h3>Welcome <?php echo $_POST["name"] . " " . $_POST['surname']; ?></h3><br>
    Your email address is: <?php echo $_POST["email"]; ?>

</body>

</html>