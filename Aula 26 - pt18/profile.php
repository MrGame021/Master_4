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
</head>
<body>
    
    <?php
    include_once('header.php');
    ?>

    <main>
        <div class="ft_nome">
            <aside>
                <img src="usuarios/default" alt="">
                <h1>Nome</h1>
                <span>nascimento</span>
                <span>genero</span>
            </aside>
            <main>
                <?php
                
                ?>
            </main>

        </div>
    </main>

</body>
</html>