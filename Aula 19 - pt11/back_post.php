<?php
session_start();
$conect = new mysqli('localhost', 'root', '', 'usuarios');


$title = $_POST['titulo'];
$txt = $_POST['text'];
$autor = $_SESSION['id'];
date_default_timezone_set('America/Sao_Paulo');
$date = date("d/n/Y H:i");

$sql = "INSERT INTO posts (titulo, texto, id_user, data) VALUES('$title', '$txt', '$autor', '$date')";
$conect->query($sql);

header('Location: index.php');

?>