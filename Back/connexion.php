<?php

require_once 'functions.php';
require_once 'controller-database.php';
require_once 'Models/Clients.php';

$mail = trim(htmlspecialchars($_POST['mail']));
$pass = trim(htmlspecialchars($_POST['password']));

//Verification des identifiants et connexion si corrects
if(connexionVerifications($mail, $pass)) {
    $database->connexionClient($mail, $pass);
} else {
    echo 'Identifiants renseignés incorrects';
}