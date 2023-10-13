<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ARRAYS</h3>

    <?php 
    //ejercicio 1
    print "<pre>\n";
    echo "<h3> EJERCICIO 1 </h3>";

    $pares = [ 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, ];
    foreach ($pares as $valor) {
        print "<p>$valor</p>\n";
    }
    print "<p>fin</p>";

    //ejercicio 2
    echo "<h3> EJERCICIO 2 </h3>";

    $valores = ["Pedro", "Ana", 34, 1,];
    print_r($valores); print "<pre>\n";

    //ejercicio 3
    echo "<h3> EJERCICIO 3 </h3>";

    $datos = [
        "nombre" => "Pedro",
        "apellido" => "Torres",
        "dirección" => "Av. Mayor 3703",
        "telefono" => 1122334455,
    ];
    
    foreach ($datos as $valor) {
        print "<p>$valor</p>\n";
    }

    //ejercicio 4
    echo "<h3> EJERCICIO 4 </h3>";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles",
    "Chicago", ];

    foreach ($ciudades as $indice => $valor) {
        print "<p>La ciudad con el índice $indice tiene el nombre $valor.</p>\n";
    }

    //ejercicio 5
    echo "<h3> EJERCICIO 5 </h3>";

    $ciudades2 = [
        "MD" => "Madrid",
        "BCL" => "Barcelona",
        "LD" => "Londres",
        "NY" => "New York",
        "LA" => "Los Angeles",
        "CCG" => "Chicago",
    ];

    foreach ($ciudades2 as $i => $valor) {
        print "<p>El índice de $i es $valor</p>\n";
    }


    ?>
</body>
</html>