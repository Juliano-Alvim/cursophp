<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Variável</title>
</head>
<body>
    <?php 
        $nome = "Juliano";
        $NOME = "Tatiana";
        $sobrenome = "Alvim";
        $idade = "30";
        const PAIS = "Brasil";
        echo "Muito prazer, $nome $sobrenome! Você é noivo da $NOME. Você mora no " . PAIS . " e você tem $idade anos!";
    ?>
</body>
</html>