/*Code javascript présent dans la page error*/

/*L'utilisateur est redirigé vers la page principal au bout de 5 secondes */
window.addEventListener('load', () => {
    setTimeout(() => {
        window.location.href = 'http://localhost:8888/Blog/index.php'
    }, 5500)
})

let count = document.getElementById('count');
let seconds = 5;

/*Affiche le compteur allant de 5 à 0 */
function countSeconds() {
    if(seconds === -1) {
        clearInterval(interval);
    } else {
        count.innerText = seconds;
        seconds = seconds - 1;
    }
}

let interval = setInterval(countSeconds, 1000);