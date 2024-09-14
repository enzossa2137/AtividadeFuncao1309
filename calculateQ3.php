<?php

function clearScreen() {
    echo "<script>window.location.href = window.location.href;</script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sexo']) && isset($_POST['altura'])) {

    $sexo = strtoupper(trim($_POST['sexo']));
    $altura = trim($_POST['altura']);
    
    if (!is_numeric($altura) || $altura <= 0) {
        echo "Altura inválida. Por favor, insira um valor válido para a altura.";
        exit;
    }
    $pesoideal = 0;

    switch ($sexo) {
        case 'M':
            $pesoideal = (72.7 * $altura) - 58;
            break;
        case 'F':
            $pesoideal = (62.1 * $altura) - 44.7;
            break;
        default:
            echo "Opção inválida para o sexo. Por favor, insira 'M' ou 'F'.";
            exit;
    }

    echo "<h1>Resultado</h1>";
    echo "Sexo: $sexo<br>";
    echo "Altura: " . number_format($altura, 2) . "<br>";
    echo "Peso ideal: " . number_format($pesoideal, 2) . " Kg<br>";
} else {
    echo "Dados não foram enviados.";
}

?>
