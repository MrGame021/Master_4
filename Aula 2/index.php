<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="texto" placeholder="Diga algo...">
        <button type="submit">Enviar</button>
    </form>

    <?php
    echo($_POST['texto']); # a var "texto" serve como indicador de informação de um formulário. Tudp que escrever no "input" fica salvo como o nomeado "texto"
    ?>
    
</body>
</html>