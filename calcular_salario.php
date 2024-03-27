<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <?php
            // Recebendo os dados do formulário
            $nome = $_POST["nome"];
            $meta_semanal = $_POST["meta_semanal"];
            $meta_mensal = $_POST["meta_mensal"];

            // Calculando o salário
            $salario_semanal = $meta_semanal * 200;
            $salario_mensal = ($meta_mensal >= $meta_semanal * 4) ? 1500 : 0;
            $salario_final = $salario_mensal + $salario_semanal;

            // Exibindo o resultado
            echo "<p>O salário final de $nome é R$" . number_format($salario_final, 2, ",", ".") . "</p>";
        ?>
    </div>
</body>
</html>
