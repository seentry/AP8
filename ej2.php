<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <br>
<?php


If ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero = $_POST["numero"];

function NumRomano($numero) {
    if ($numero == 1) {
        $i1 = "I";
        return $i1;
    } elseif ($numero == 2) {
        $i1 = "II";
        return $i1;
    } elseif ($numero == 3) {
    $i1 = "III";
    return $i1;
    } elseif ($numero == 4) {
    $i1 = "IV";
    return $i1;
    } elseif ($numero == 5) {
    $i1 = "V";
    return $i1;
    } elseif ($numero == 6) {
    $i1 = "VI";
    return $i1;
    } elseif ($numero == 7) {
    $i1 = "VII";
    return $i1;
    } elseif ($numero == 8) {
    $i1 = "VIII";
    return $i1;
    } elseif ($numero == 9) {
    $i1 = "IX";
    return $i1;
    } elseif ($numero == 10) {
    $i1 = "X";
    return $i1;
}
}

    $resultado = NumRomano($numero);
    echo "El numero es $resultado";

}



?>
<form method="POST">

    <label for="numero">Introduce un numero: </label>
    <input type="number" id="numero" name="numero" required>
    <input type="submit" value="Cambio">
</form>
</body>
</html>