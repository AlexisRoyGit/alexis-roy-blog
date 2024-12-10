<?php

require_once 'controller-session.php';

//Appeler à la deconexion de l'utilisateur
$session->deconnexion();
header('Location: ../index.php');