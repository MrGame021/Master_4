<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    
</head>
<body>

    <form action="boasvindas.php" method="post">
        <input type="text" name="nome" placeholder="Diga algo...">
        <button type="submit">Enviar</button>
    </form>

    <hr>

    <h1>Par ou Ímpar</h1>
    <form action="" method="post">

        <select name="escolha" id="">
            <option value="par">Par</option>
            <option value="impar">Ímpar</option>
        </select>
    
        <input type="number" name='numero' min="0" max="5" placeholder='Valor'>
        <button type="submit">Enviar</button>
    </form>

    <?php
    $escolha = @$_POST['escolha'];
    $num = @$_POST['numero'];
    $pc = rand(0,5);
    $somaCompleta = $pc + $num;

    echo('Você: '.$num.'  |  PC: '.$pc.' ('.$somaCompleta.')');

    if($somaCompleta%2 == 0){
        $result = 'par';
    }
    else{
        $result = 'impar';
    }
    
    if($escolha == $result){
        echo('<br>Você ganhou! Deu '.$result);
    }
    else{
        echo('<br>Você perdeu! Deu '.$result);
    }
    
    ?>
    
</body>
</html>