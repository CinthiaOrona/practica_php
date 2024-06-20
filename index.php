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
    //?? esto es eL 'import' de la clase Cconexion que se encuentra en el archivo conexion.php
    include_once('conexion.php');
    // Cconexion::ConexionBD();
    $conexion = new Cconexion();
    $db = $conexion->ConexionBD();
    ?>

    <!-- Formulario Registro -->
    <?php include 'components/user_form.php'; ?>


</body>

</html>