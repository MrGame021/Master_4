<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Aula 1 PHP</h1>
    <h2>Boas-vindas <?=  $_POST['nome'] ?></h2>

    <?php
        echo('Olá');
        $teste = 'testando';
        echo($teste);
        echo('<br>');
        echo('Olá '.$teste);
        $n1 = 4;
        $n2 = 7;
        echo('<br>'.$n1+$n2);
    ?>

</body>
</html>