<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>

    <link rel="stylesheet" href="./Styles/reset.css">
    <link rel="stylesheet" href="./Styles/Style_form_notas.css">
</head>
<body>
    
    <fieldset>
        <legend>Calcular Média</legend>
        
        <form method="GET" action="./results/nota_result.php">
            
            <label for="aluno">Insira o nome do aluno.</label><br>
            
            <input id="aluno" type="text" name="aluno" placeholder="Nome do Aluno." required>
            <br>
            
            <label for="nota1">Insira a nota do aluno.</label>
            <br>
            <input type="number" id="nota1" name="nota_1" step="any" placeholder="Nota 1:" required>
            <br>
            <input type="number" id="nota2" name="nota_2" step="any" placeholder="Nota 2:" required><br>
            
            <button class="button-64" type="submit"><span>OK</span></button>
            
        </form>
    </fieldset>


</body>
</html>