<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Salário</h1>
        <form action="calcular_salario.php" method="post">
            <label for="nome">Nome do Vendedor:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="meta_semanal">Meta Semanal:</label>
            <input type="number" id="meta_semanal" name="meta_semanal" required>
            
            <label for="meta_mensal">Meta Mensal:</label>
            <input type="number" id="meta_mensal" name="meta_mensal" required>
            
            <button type="submit">Calcular Salário</button>
        </form>
    </div>
</body>
</html>
