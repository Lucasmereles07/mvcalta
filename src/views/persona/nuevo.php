<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/persona/nuevo.css">
    <title>Document</title>
</head>

<body>

</body>
<form action="<?= URL_BASE; ?>personas/crear" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" autocomplete="on" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" autocomplete="on" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="email@gmail.com">

    <label for="fechaNac">Fecha de nacimiento:</label>
    <input type="date" id="fechaNac" name="fechaNac" autocomplete="on" required>

    <label for="numero">Ingrese su numero:</label>
    <input type="tel" id="numero" name="numero" pattern="[0-9]{9}" value="123456789">

    <label for="genero"></label>
    <input type="radio" id="genero" name="genero" value="M" autocomplete="on" required> Masculino

    <label for="genero"></label>
    <input type="radio" id="genero" name="genero" value="F" autocomplete="on" required> Femenino

    <label for="genero"></label>
    <input type="radio" id="genero" name="genero" value="O" autocomplete="on" required> Otro



    <input list="pais" name="pais">

    <datalist id="pais">
        <option value="Argentina">Argentina</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Brasil">Brasil</option>
        <option value="Chile">Chile</option>
        <option value="Colombia">Colombia</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Perú">Perú</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Venezuela">Venezuela</option>
    </datalist>

    <input type="submit" value="Iniciar sesión">

</form>

</html>