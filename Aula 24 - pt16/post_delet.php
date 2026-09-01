<?php
include_once('conect.php');

$id_post = $_GET['id'];

$sql = "DELETE FROM posts WHERE id = '$id_post'";
$conect->query($sql);

header('Location: index.php');
?>