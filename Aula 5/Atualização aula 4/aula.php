<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
    <link rel="stylesheet" href="aula.css">
</head>
<body>
    
    <?php
    $texto = 'HOJE É TERÇA FEIRA';

    //echo $texto;   --> tambem pode ser escrito assim
    echo('<h2>'.$texto.'</h2>');

    // TAMANHO DO TEXTO:
    echo('tamanho do texto: '.strlen($texto).'<br>');

    // POSIÇÃO X DO TEXTO:
    echo('Posição X do texto: '.$texto[2].'<br>');
    echo('Primeiro caractere: '.$texto[0].'<br>');
    echo('Último caractere: '.$texto[strlen($texto)-1].'<br>');

    // LOCALIZAR TEXTO:
    echo('Localizar texto: '.strpos($texto, 'T').'<br>');
    echo('Localizar palavra: '.strpos($texto, 'É').'<br>');

    // MAIÚSCULO:
    echo('Maiúsculo: '.strtoupper($texto).'<br>');

    // MINÚSCULO:
    echo('Minúsculo: '.strtolower($texto).'<br>');

    // JUSTIFICADO:
    echo('Justificado: '.ucfirst($texto).'<br>'); // apenas a inicial maiuscula
    echo('Justificado: '.ucfirst(strtolower($texto)).'<br>');

    echo '<hr>';

    $txt = 'hoje tem aula na supergeeks';
    echo('<h2>'.$txt.'</h2>');
    if(strpos($txt, 'aula')){
        echo('Tem "aula" na posição '.strpos($txt, 'aula').'<br>');
    }
    else{
        echo('Não tem "aula"');
    }
    ?>

</body>
</html>