<?php

require 'calculadora.php'; // Se requiere el fichero calculadora.php para que funcione la clase Calculadora

// Se verifica que se hayan enviado los datos desde el formulario
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
    // Se obtienen los valores de los inputs del formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operador = $_POST['operacion'];
    
    // Se crea una instancia de la clase Calculadora con los valores del formulario
    $calculadora = new Calculadora($numero1, $numero2, $operador);
    
    // Se llama al método calcular de la clase Calculadora y se guarda el resultado
    $resultado = $calculadora->calcular();

    //Redirecciona el resultado pasandolo por parametro en la URL
    header("Location:mostrar.php?mostrar=$resultado");
}else{
    echo "<h1><b>ERROR: No se han encontrado datos válidos</b></h1>";
}