<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="texto" placeholder="Digite algo...">
        <button type="submit">Enviar</button>
    </form>

    <?php
    
    $listaComp = [];
    $listaComp[] = $_POST['texto'];
    echo('<ol>');
    foreach($listaComp as $item){
        echo('<li>'.$item.'</li>');
    }
    echo('<ol>');

    ?>

</body>
</html>