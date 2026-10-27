<?php
include_once('conect.php');

#PEGANDO INFOS DO USER PELO ID

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$result = $conect->query($sql);
$user_2 = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    include_once('header.php');
    ?>

    <main class='first'>
        <aside>
            <img src="usuarios/default.jpg" alt="">
            <h1>Nome</h1>
            <span>nascimento</span>
            <span>genero</span>
        </aside>
        <main>
            <?php
            # PEGAR TODOS OS POSTS DA PESSOA DO PERFIL:
            ?>
        </main>ashgdajhsdjhagjdhagdjhagsjhd
    </main>
    
</body>
</html>