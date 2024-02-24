<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Calculadora de IMC</h2>

        <?php
        $resultado = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            if ($peso > 0 && $altura > 0) {
                $imc = $peso / ($altura * $altura);
                $resultado = "Seu IMC é: " . number_format($imc, 2);
            } else {
                $resultado = "Por favor, insira valores válidos para peso e altura.";
            }
            $resultado = "Erro de código"
            $valor = 0/100;

            // Isto é um comentário de uma linha

/*
   Isto é um comentário de uma linha
*/
        }
        ?>

        <form method="post" action="">
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" required>

            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura" required>

            <button type="submit">Calcular</button>
        </form>
        <b>teste
        <p><?php echo $resultado; ?></p>
    </div>

</body>
</html>
