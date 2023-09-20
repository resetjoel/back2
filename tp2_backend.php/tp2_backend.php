<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Tarea N°3</H1>
    <?php

    //1. Crear una variable n y validar que sea un número positivo.

    $variable1 = 1;

    if ($variable1>0) {
        print "El numero es positivo <br>";
    } else {
        print "El numero es negativo <br>";
    }
    
    //2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.

    $variable2 = 7;

    if ($variable2>1 & $variable2<10) {
        print "El numero es mayor a 1 y menor a 10 <br>";
    } else {
        print "El numero es igual o menor a 1 e igual o mayor a 10 <br>";
    }
    
    //3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.

    $variable3 = 26;

    if ($variable3>10 | $variable3<2) {
        print "El numero es mayor a 10 o menor a 2 <br>";
    } else {
        print "El numero es menor o igual a 10 o es mayor o igual a 2 <br>";
    }

    //4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    //mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    //mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    //numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.

    $numero1 = 10;
    $numero2 = 3;

    if ($numero1>$numero2) {
        print $numero1+$numero2;
        print "<br>";
        print $numero1-$numero2;
        print "<br>";
    }
    elseif ($numero1<$numero2) {
        print $numero2*$numero1;
        print "<br>";
        print $numero2/$numero1;
        print "<br>";
        print $numero2%$numero1;
        print "<br>";
    } else {
        "Los numeros ingresados son iguales <br>";
    }

    ?>
</body>
</html>