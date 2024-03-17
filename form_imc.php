<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    
    <!-- Importando o arquivo de estilo CSS -->
    <link rel="stylesheet" href="./Styles/reset.css">
    <link rel="stylesheet" href="./Styles/Style_form_imc.css">
    <!-- Importando a fonte Space Mono do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Formulário de cálculo do IMC -->
    <fieldset class="fieldset">
        <legend class="legend">Calculo do IMC</legend>
        <form action="results/imc_result.php" method="get">
            <!-- Campo de entrada para o peso -->
            <label for="peso">Peso</label>
            <!-- Tipo de input definido como number para aceitar apenas números -->
            <!-- Removi inputmode="numeric" pois ele pode afetar a aparência em alguns navegadores -->
            <input inputmode="numeric" type="number" id="peso" name="peso" placeholder="Informe o peso em quilos" step="any" required><br>
            <!-- Campo de entrada para a altura -->
            <label for="altura">Altura</label>
            <!-- Tipo de input definido como number para aceitar apenas números -->
            <input inputmode="numeric" type="number" id="altura" name="altura" placeholder="Informe a altura em metros" step="any" required><br>
            <!-- Botão para confirmar o cálculo -->
            <button class="button-64" role="button"><span>CONFIRMAR</span></button>
        </form>
    </fieldset>

</body>
</html>
