<?php            
include_once('conect.php');
$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
$result = $conect->query($sql);

while($post = $result->fetch_assoc()){
    $nome_id = $post['id_user'];
    $sql = "SELECT * FROM usuarios WHERE ID = '$nome_id' ";
    $result2 = $conect->query($sql);
    $autor = $result2->fetch_assoc();
    echo('<div class="post">');
    echo('<div class="title_x">');

    if($post['id_user'] == $_SESSION['id']){
        echo('<a class="delet" href="post_delet.php?id='.$post['id'].'"> X </a>');
    }
    
    echo('<h2>'.$post['titulo'].'</h2>');
    echo('</div>');
    echo('<p>'.$post['texto'].'</p>');
    echo('<img class="foto" src="usuarios/'.$autor['FOTO'].'">');
    echo('<small>Autor: '.$autor['NOME'].'</small>');
    echo('<small>Data: '.$post['data'].'</small>');
    echo('</div>');
}
?>