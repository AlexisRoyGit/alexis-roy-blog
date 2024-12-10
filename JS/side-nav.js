/*Permet deploiemet du menu latéral mobile */
let burgerbutton = document.getElementById('burger-button');
let closebutton = document.getElementById('close');
let sidenav = document.getElementById('side-nav');

/*Dépoloie le menu */
function openSideNav() {
    sidenav.classList.add('active');
}

/*Ferme le menu */
function closeSideNav() {
    sidenav.classList.remove('active');
}

burgerbutton.addEventListener('click', openSideNav);
closebutton.addEventListener('click', closeSideNav);