/*Permet changement de formulaire au clic de l'utilisateur sur la page connexion */

let radioConnexion = document.getElementById('formconnexion');
let radioInscription = document.getElementById('forminscription');
let formConnexion = document.getElementById('connexion');
let formInscription = document.getElementById('inscription');

/*Affiche formulaire d'inscription*/
function displayFormSuscribe() {
    formConnexion.classList.add('undisplayed');
    formInscription.classList.remove('undisplayed');
}

/*Affiche formulaire de connexion*/
function displayFormConnexion() {
    formConnexion.classList.remove('undisplayed');
    formInscription.classList.add('undisplayed');
}

radioConnexion.addEventListener('change', displayFormConnexion);
radioInscription.addEventListener('change', displayFormSuscribe);