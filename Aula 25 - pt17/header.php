<header>
    <b>Site</b>
    
    <?php
    session_start();
    include_once('conect.php');

    # SE NÃO ESTIVER LOGADO, TE FORÇA PRA TELA DE LOGIN

    if(!isset($_SESSION['id'])){
        
    }
    ?>

</header>