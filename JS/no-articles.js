///Affichage Message si aucun article n'est encore présent pour la page d'accueil et la page des articles

let article = document.querySelector('article');
//Pour la page d'accueil
let title = document.querySelector('h2');
//Pour la page des articles
let div = document.querySelector('div#pagination');

//Affichage message selon la page appelée
function messageNoArticles() {
    if(article == null) {
        let text = document.createElement('p');
        text.innerText = 'Aucun article pour le moment !';
        text.classList.add('title');

        if(div == null) {
            title.append(text);
        } else {
            div.before(text);
        }
    }
}

window.addEventListener('load', () => {
    messageNoArticles();
})