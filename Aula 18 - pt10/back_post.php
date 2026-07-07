<?php
session_start();
$conect = new mysqli('localhost', 'root', '', 'usuarios');


$title = $_POST['titulo'];
$txt = $_POST['text'];
$autor = $_SESSION['id'];
date_default_timezone_set('America/Sao_Paulo');
$date = date("d/n/Y H:i");
echo($date);
?>