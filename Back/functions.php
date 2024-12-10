<?php

//Vérification du format de l'email en paramètre
function emailVerify(string $email):bool 
{
    $pattern = '/^[A-z0-9_.+-]+@[A-z0-9-]+\.[A-z0-9-.]+$/';
    if(preg_match($pattern, $email)) {
        return true;
    } else {
       return false;
    }
}

//Vérifie que les champs en paramètres sont non vides et non null
function emptyFieldsConnexion(string $log, string $pass):bool 
{
    if(!isset($log) || !isset($pass)) {
        return false;
    } elseif ($log === '' || $pass === '') {
        return false;
    } else {
        return true;
    }
}

//Vérifie que le mot de passe contient bien au moins un nombre et une majuscule
function passwordCharacters(string $pass):bool 
{
    $patternMaj = '/[A-Z]/';
    $patternNum = '/[0-9]/';

    if(preg_match($patternMaj, $pass) && preg_match($patternNum, $pass)) {
        return true;
    } else {
        return false;
    }
}

//Vérifie que le mot de passe en paramètre fasse entre 10 et 25 caractères
function passwordLength(string $pass): bool
{
    if(strlen($pass) > 10 && strlen($pass) < 25) {
        return true;
    } else {
        return false;
    }
}

function pseudoLength(string $pseudo) : bool
{
    return strlen($pseudo) <= 20;
}

//Verifications des champs de connexion via les 3 fonctions ci-dessus
function connexionVerifications(string $log, string $pass):bool 
{
    if(emptyFieldsConnexion($log, $pass) && emailVerify($log) && passwordLength($pass)) {
        return true;
    } else {
        return false;
    }
}

//Vérifie que les champs en paramètres sont non vides et non null
function emptyFieldsInscription(string $log, string $pass, string $pseudo, array $files):bool 
{
    if(!isset($log) || !isset($pass) || !isset($pseudo) || !isset($files)) {
        return false;
    } elseif ($log === '' || $pass === '' || $pseudo === '') {
        return false;
    } else {
        return true;
    }
}

//Vérification du poids du fichier en paramètres (pas plus de 3Mo)
function fileWeight(array $file): bool 
{
    if($file['size'] <= 3145728){
        return true;
    } else {
        return false;
    }
}

//Vérification du type Mime de l'image en paramètre
function fileMimeType(array $file): bool 
{
    if($file['type'] == "image/gif" 
    || $file['type'] == "image/jpeg"
    || $file['type'] == "image/jpg"
    || $file['type'] == "image/png") 
    {
        return true;
    } else {
        return false;
    }
}

//Vérification de l'extension de l'image en paramètre
function fileExtension(array $file): bool
{
    if(preg_match('/\.(jpg|gif|png|jpeg)$/',$file['name'])) 
    {
        return true;
    } else {
        return false;
    }
}

//Vérification de la présence du code d'erreur de l'image en paramètre
function imageError(array $file): bool 
{
    if($file['error'] == 0) {
        return true;
    } else {
        return false;
    }
}


function fileVerifications(array $file): bool 
{
    return imageError($file) && fileWeight($file) && fileMimeType($file) && fileExtension($file);
}


//Verif longueur titres des articles
function lengthTitleArticles(string $title): bool 
{
    return(strlen($title) <= 50);
}

//Verif longueur des commentaires
function lengthComment(string $comment): bool 
{
    return (strlen($comment) <= 150);
}

//Filtre pour les insultes
function verificationInsultComments(string $comment) {
    $toReplace = ['connard', 'connasse', 'poufiasse','fils de pute','pute', 'fdp', 'pd', 'pétasse', 'cons', 'con'];
    return str_ireplace($toReplace, '****', $comment);
}