<?php
echo "<br/>********************************************<br/>";
echo "<p>
Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso.
</p>";

// Función para invertir un array
function invertirArray($array) {
    return array_reverse($array);
}

// Array de números de ejemplo
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Invertir el array
$numerosInvertidos = invertirArray($numeros);

// Mostrar el array original y el array invertido
echo "Array Original: ";
echo implode(", ", $numeros);
echo "<br>";
echo "Array Invertido: ";
echo implode(", ", $numerosInvertidos);
echo "<br/>********************************************<br/>";
echo "<p>Problema de Suma de Números Pares:
        Crea un script que sume todos los números pares en un array de números enteros.
</p>";
// Función para sumar los números pares en un array
function sumarNumerosPares($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) { // Verificar si el número es par
            $suma += $numero; // Sumar el número par a la suma total
        }
    }
    return $suma;
}


// Calcular la suma de los números pares en el array
$sumaPares = sumarNumerosPares($numeros);

// Mostrar la suma de los números pares
echo "La suma de los números pares en el array es: $sumaPares";
echo "<br/>********************************************<br/>";
echo "<p>   Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena.</p>";

// Función para contar la frecuencia de cada carácter en una cadena de texto
function frecuenciaCaracteres($cadena) {
    // Convertir la cadena a minúsculas para considerar caracteres iguales sin importar la capitalización
    $cadena = strtolower($cadena);
    
    // Inicializar un array para almacenar la frecuencia de cada carácter
    $frecuencia = array();
    
    // Recorrer la cadena de texto
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        // Verificar si el carácter ya está en el array de frecuencia
        if (isset($frecuencia[$caracter])) {
            // Si existe, incrementar el contador de frecuencia
            $frecuencia[$caracter]++;
        } else {
            // Si no existe, agregar el carácter al array de frecuencia con un contador inicializado en 1
            $frecuencia[$caracter] = 1;
        }
    }
    
    // Devolver el array de frecuencia
    return $frecuencia;
}

// Ejemplo de uso
$cadena = "EstructurasConPHP";
$resultado = frecuenciaCaracteres($cadena);
// Mostrar el resultado
echo "Frecuencia de caracteres en la cadena \"$cadena\":<br>";
foreach ($resultado as $caracter => $frecuencia) {
    echo "Carácter '$caracter' aparece $frecuencia vez(es)<br>";
}
echo "<br/>********************************************<br/>";
echo "<p>  Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide.</p>";
// Función para imprimir una pirámide de asteriscos
function imprimirPiramide($filas) {
    // Bucle externo para iterar sobre cada fila de la pirámide
    for ($i = 1; $i <= $filas; $i++) {
        // Bucle interno para imprimir los espacios en blanco antes de los asteriscos
        for ($j = 1; $j <= ($filas - $i); $j++) {
            echo " ";
        }
        // Bucle interno para imprimir los asteriscos de la fila actual
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Salto de línea al final de cada fila
        echo "<br>";
    }
}
// Función para imprimir un triángulo de asteriscos
function imprimirTriangulo($altura) {
    // Bucle externo para iterar sobre cada fila del triángulo
    for ($i = 1; $i <= $altura; $i++) {
        // Bucle interno para imprimir los espacios en blanco antes de los asteriscos
        for ($j = 1; $j <= ($altura - $i); $j++) {
            echo "&nbsp;&nbsp;"; // Utilizamos espacios en blanco HTML para mantener la forma triangular
        }
        // Bucle interno para imprimir los asteriscos de la fila actual
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Salto de línea al final de cada fila
        echo "<br>";
    }
}
// Número de filas para la pirámide
$filas = 15;

// Llamar a la función para imprimir la pirámide
imprimirPiramide($filas);
//imprimirTriangulo($filas);
?>