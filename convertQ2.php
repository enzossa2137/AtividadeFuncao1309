<?php

function converterDolarParaReal($valorDolar) {

    $taxaCambio = 1.81;
    
    $valorReal = $valorDolar * $taxaCambio;
    
    $valorRealArredondado = round($valorReal, 2);
    
    return $valorRealArredondado;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dolar'])) {

    $valorDolar = trim($_POST['dolar']);

    if (is_numeric($valorDolar) && $valorDolar >= 0) {

        $valorConvertido = converterDolarParaReal($valorDolar);
        echo "<h1>Resultado da Conversão</h1>";
        echo "Valor em dólares: \$" . number_format($valorDolar, 2) . "<br>";
        echo "Valor convertido para reais: R$ " . number_format($valorConvertido, 2) . "<br>";
    } else {
        echo "Entrada inválida. Por favor, insira um número válido maior ou igual a zero.";
    }
} else {
    echo "Nenhum valor foi enviado.";
}

?>
