<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo do Peso Ideal</title>
</head>
<body>
    <h1>Calcular Peso Ideal</h1>
    <form action="calculate.php" method="post">
        <label for="sexo">Informe seu sexo (M/F):</label>
        <input type="text" id="sexo" name="sexo" maxlength="1" required>
        <br><br>
        <label for="altura">Informe sua altura (em metros):</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
