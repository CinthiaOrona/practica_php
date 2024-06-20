<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion PHP y MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        
        //?? esto es em 'import' de la clase Cconexion que se encuentra en el archivo conexion.php
        include_once ('conexion.php');
        // Cconexion::ConexionBD();
        $conexion = new Cconexion();
        $db = $conexion->ConexionBD();

        
        // if($db != null)
        // {
        //     $query = $db->query("SELECT * FROM user");
        //     $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
            
        //     if ($usuarios) {
        //         echo "<ul>";
        //         foreach ($usuarios as $usuario) {
        //             echo "<li>" . $usuario['name'] . " - " . $usuario['surname'] . " - " . $usuario['email'] . " - " . $usuario['password'] . " - " . $usuario['country'] . "</li>";
        //         }
        //         echo "</ul>";
        //     } else {
        //         echo "No hay usuarios registrados.";
        //     }
        // }
        ?>

        <form class="border d-flex flex-column px-4" action="recibir2.php" method="POST">
            <label for="name">nombre:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="surname">apellido:</label>
            <input type="text" name="surname" id="surname">
            <br>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">contraseña:</label>
            <input type="password" name="password" id="password">
            <br>
            <label for="date">fecha</label>
            <input type="date" name="date" id="date">
            <br>
            <label for="country">pais:</label>
            <input type="text" name="country" id="country">
            <br>
            <input type="submit" value="enviar">
        </form>
    
</body>
</html>