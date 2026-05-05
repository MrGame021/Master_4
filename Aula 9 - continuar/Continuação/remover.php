<?php

$conect = new mysqli('localhost', 'root', '', 'aula6');

$id = $_GET['id'];

$sql = "DELETE FROM pessoas WHERE id = '$id'";
$conect -> query($sql);

header('Location: pessoas.php');

?>