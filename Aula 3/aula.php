<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista em PHP(array)</h1>

    <p>
        Uma lista(array) é uma variável que pode guardar múltiplos valores ao mesmo tempo.
    </p>

    <hr>

    <?php
    // índice:   0        1        2       3        4
    $alunos = ['Ana', 'Amanda', 'Maria', 'José', 'Lucas'];

    // - =  CONSULTAR OS ITENS DA LISTA  = -
    //echo($alunos[0]);

    // - =  CONSULTAR TAMANHO DA LISTA  = -
    //echo(count($alunos));

    // - =  ADICIONAR ITENS  = -
    $alunos[] = 'Pedro';
    array_push($alunos, "Murilo");

    // - =  REMOVER ITENS  = -
    //array_pop($alunos);
    //array_shift($alunos);
    //unset($alunos[1]);

    // - =  ORDENAR A LISTA  = -
    //sort($alunos);

    // - =  EMBARALHAR LISTA  = -
    //shuffle($alunos);

    // - =  VER LISTA INTEIRA  = -
    //print_r($alunos);

    // - =  LAÇO DE REPETIÇÃO  = -
    //for($i=0;$i<count($alunos);$i++){
    //    echo(($i+1).' - '.$alunos[$i].'<br>');
    //}
    echo('<ol>');
    foreach($alunos as $aluno){
        echo('<li>'.$aluno.'</li>');
    }
    echo('</ol>');

    echo($_SESSION['teste']);
    ?>

</body>
</html>