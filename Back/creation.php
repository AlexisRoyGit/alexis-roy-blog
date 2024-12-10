<?php

session_start();

require_once 'controller-database.php';
require_once 'functions.php';

$title = trim(htmlspecialchars($_POST['title']));
$image = $_FILES['image'];
$text = trim(htmlspecialchars($_POST['text']));
$author = $_SESSION['id-client'];

//verification de l'image (poids, types...) et de la longueur du titre puis creation de l'article et stockage de l'image utilisée dans le dossier Médias
if(fileVerifications($image) && lengthTitleArticles($title)) {
    $database->creationArticle($title, $text, $image['name'], $author);
    move_uploaded_file($image['tmp_name'], '../Médias/'.$image['name'].'');
}