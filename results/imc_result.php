<?php

if (!empty($_GET["peso"]) && !empty($_GET["altura"])) {
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    $imc = number_format($peso / ($altura * $altura), 2);

    if ($imc < 17) {
        $situacao = 'Muito abaixo do peso';
    } elseif ($imc >= 17 && $imc < 18.49) {
        $situacao = 'Abaixo do peso';
    } elseif ($imc >= 18.5 && $imc < 24.99) {
        $situacao = 'Peso normal';
    } elseif ($imc >= 25 && $imc < 29.99) {
        $situacao = 'Acima do peso';
    } elseif ($imc >= 30 && $imc < 34.99) {
        $situacao = 'Obesidade I';
    } elseif ($imc >= 35 && $imc < 39.99) {
        $situacao = 'Obesidade II (severa)';
    } elseif ($imc >= 40) {
        $situacao = 'Obesidade III (mórbida)';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>

    <link rel="stylesheet" href="../Styles/Style_imc_result.css">
    <link rel="stylesheet" href="../Styles/reset.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="result">
            <p>Seu IMC é de: <?php echo $imc; ?></p>
            <div class="sit_result">
                <p>Situação:</p>
                <p><?php echo $situacao; ?> </p>
            </div>  

        </div>
        
        <div>
            <table>
                <tr>
                    <th>Resultado</th>
                    <th>Situação</th>
                </tr>
                <tr>
                    <td>abaixo de 17</td>
                    <td>muito abaixo do peso</td>
                </tr>
                <tr>
                    <td>Entre 17 e 18,49</td>
                    <td>Abaixo do peso</td>
                </tr>
                <tr>
                    <td>Entre 18,5 e 24,99</td>
                    <td>Peso normal</td>
                </tr>
                <tr>
                    <td>Entre 25 e 29,99</td>
                    <td>Acima do peso</td>
                </tr>
                <tr>
                    <td>Entre 30 e 34,99</td>
                    <td>Obesidade I</td>
                </tr>
                <tr>
                    <td>Entre 35 e 39,99</td>
                    <td>Obesidade II (severa)</td>
                </tr>
                <tr>
                    <td>Acima de 40</td>
                    <td>Obesidade III (mórbida)</td>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>