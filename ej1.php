<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <br>
<?php


If ($_SERVER["REQUEST_METHOD"] == "POST"){
    $hermano1 = $_POST["hermano1"];
    $hermano2 = $_POST["hermano2"];


function diferenciaEdad($hermano1, $hermano2) {
    if ($hermano1 > $hermano2) {
        $i1 = $hermano1 - $hermano2;
        return $i1;
    } else {
        $i2 = $hermano2 - $hermano1;
        return $i2;
    }
}

    $resultado = diferenciaEdad($hermano1, $hermano2);
    echo "La diferncia de edad es $resultado";

}



?>
<form method="POST">

    <label for="hermano1">Introduce edad hermano 1: </label>
    <input type="number" id="hermano1" name="hermano1" required>
    <br>
    <label for="hermano2">Introduce edad hermano 2: </label>
    <input type="number" id="hermano2" name="hermano2" required>
    <br>
    <input type="submit" value="Diferencia">
</form>
</body>
</html>

