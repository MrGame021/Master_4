<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Login:</h1>

    <form action="back_login.php" method="post">
        <input name="nome" type="text" placeholder='Nome de Usuário'><br>
        <input name="senha" type="password" placeholder='Senha'><br>
        <input name="senha_Conf" type="password" placeholder='Confirmar Senha'><br>
        Data de Nascimento: <input name="date" type="date" placeholder='Data de Nascimento'><br>
        <input name="email" type="email" placeholder='Email'><br>
        <select name="genero" id="genero">
            <option value="" disable selected>Gênero</option>
            <option value="0">Masculino</option>
            <option value="1">Feminino</option>
            <option value="2">Prefiro não opinar</option>
        </select><br><br>

        <button>Cadastrar</button>
    </form>

</body>
</html>