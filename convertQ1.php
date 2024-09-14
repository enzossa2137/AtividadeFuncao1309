<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['celsius'])) {
    $valor = $_POST['celsius'];

    if (is_numeric($valor)) {
        $resultado = ($valor * 9 / 5) + 32;
        echo "<h1>Resultado da Conversão</h1>";
        printf("%.2f Celsius é igual a %.2f Fahrenheit.<br>", $valor, $resultado);
    } else {
        echo "Entrada inválida. Por favor, insira um número válido.";
    }
} else {
    echo "Nenhum valor foi enviado.";
}

?>
