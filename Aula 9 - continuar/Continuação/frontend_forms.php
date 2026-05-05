<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Adicionar pessoa:</h1>
    
    <form action="backend_add.php" method="post">
        <input type="text" name='nome' placeholder='Nome...'>
        <input type="number" name='idade' placeholder='Idade...'>
        <input type="text" name='cidade' placeholder='Cidade...'>
        <button type='submit'>Enviar</button>
    </form>
    <br>
    <button>
        <a href="pessoas.php">Tabela de pessoas</a>
    </button>
    

</body>
</html>