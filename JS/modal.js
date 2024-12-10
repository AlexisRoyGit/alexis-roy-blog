/*Affichage de la modal d'acceptation des cookies sur la page index*/

let modale = document.getElementById('modal');
let checkbox = document.getElementById('choice');
let submit = document.querySelector('#modal button')

let links = document.querySelectorAll('a');
let burgerButton = document.getElementById('burger-button');

/*Si les cookies n'ont pas déja été accepté, la modal s'affiche et il est impossible de cliquer autre part sur la page */
if(!localStorage.getItem('AcceptCookie')) {
    window.addEventListener('load', () => {
        modale.style.display = 'block';
        burgerButton.style.pointerEvents = 'none';
        links.forEach(link => {
            link.style.pointerEvents = 'none';
        });
    });

    /*A l'acceptation de la modal, elle disparait et les autres éléments redeviennent cliquables.  Dans le localstorage, 
    un objet AcceptCookie est créé, signifiant que l'utilisateur les a acceptés.*/
    submit.addEventListener('click', () => {
        if(checkbox.checked) {
            modale.style.display = 'none';
            burgerButton.style.pointerEvents = '';
            links.forEach(link => {
                link.style.pointerEvents = '';
            });
            localStorage.setItem('AcceptCookie', 'true');
        }
    });
}