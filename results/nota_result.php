<?php

$aluno = $_GET["aluno"];
$nota1 = $_GET["nota_1"];
$nota2 = $_GET["nota_2"];

$resultado = ($nota1 + $nota2) / 2;

if ($resultado < 4) {
    $situacao = 'reprovado';
} elseif ($resultado >= 4 && $resultado < 6) {
    $situacao = 'exame final';
} else {
    $situacao = 'Aprovado';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>

    <link rel="stylesheet" href="../Styles/reset.css">
    <link rel="stylesheet" href="../Styles/Style_nota_result.css">
</head>

<body>

    <main>
        
        <div class="status">
            <h1>Aluno</h1>
            <p> <?php echo $aluno; ?> </p><br>

            <h1>Média</h1>
            <p>Sua média é foi de <?php echo $resultado; ?> </p> <br>
            <h1>Situação</h1>
            <p> <?php echo $situacao; ?> </p>

        </div>
        <div>
            <table>
                <tr>
                    <th>Média</th>
                    <th>Situação</th>
                </tr>
                <tr>
                    <td>Abaixo de 4,0</td>
                    <td>Reprovado</td>
                </tr>
                <tr>
                    <td>Maior ou igual a quatro 4,0 e menor que 6.0</td>
                    <td>Exame final</td>
                </tr>
                <tr>
                    <td>Maior ou igual a 6.0</td>
                    <td>Aprovado</td>
                </tr>
            </table>
        </div>

    </main>

</body>

</html>