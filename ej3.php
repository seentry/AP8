<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <br>
<?php



function dameNumero() {
    $numero = array();

    while (count($numero) < 6) {
        $random = random_int(1,49);
        
        if (!in_array($random, $numero)) {
            $numero[] = $random;
        }
    }
    return $numero;
}

    $numeros = dameNumero();
    echo "Los numeros són: " . implode(",", $numeros);




?>
</body>
</html>

