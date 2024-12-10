<?php

session_start();

require_once 'functions.php';
require_once 'controller-database.php';

$comment = trim(htmlspecialchars($_POST['comment']));
$article = trim(htmlspecialchars($_POST['article']));

//verification longueur et filtre pour les insultes puis création du commentaire
if(lengthComment($comment)) {
    $newcomment = verificationInsultComments($comment);
    $database->postComment($newcomment, $_SESSION['id-client'], intval($article));
} else {
    echo 'Votre commentaire est trop long';
}
