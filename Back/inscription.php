<?php

require_once 'functions.php';
require_once 'controller-database.php';

$mail = trim(htmlspecialchars($_POST['email']));
$password = trim(htmlspecialchars($_POST['pass']));
$pseudo = trim(htmlspecialchars($_POST['pseudo']));
$avatar = $_FILES['avatar'];
$tmp = trim(htmlspecialchars($avatar['tmp_name']));

//Vérification de la présence ou non d'adresse mail ou pseudo deja existants à ceux renseignés
//Puis verifications des champs (non vides, mail + mot de passe conformes... ) et creation compte client
if($database->preventDuplication($mail) == false && $database->preventDuplicationPseudo($pseudo) == false) {
    if(emptyFieldsInscription($mail, $password, $pseudo, $avatar) && emailVerify($mail) && passwordCharacters($password) && passwordLength($password)
&& pseudoLength($pseudo) && fileVerifications($avatar)) {
    $database->creationClient($mail, $password, $pseudo, $avatar['name']);
    move_uploaded_file($tmp, '../Avatars/'.$avatar['name'].'');
    
} else {
    echo 'erreur au niveau des champs';
}
} else {
    echo 'Cette adresse mail ou pseudo est déjà associée à un compte client existant, veuillez en sélectionner une autre';
}