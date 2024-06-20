<!-- NOTA:  recibir.php en este contexto, debe estar en la columna de la aplicación, es decir, junto a index.php-->
 <!-- Caso contrario al no encontrar el archivo mostrará un mensaje de error -->

<form class="border d-flex flex-column px-4" action="recibir.php" method="POST">
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
