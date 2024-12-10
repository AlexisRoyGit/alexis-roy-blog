<?php 
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
    }  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warhammer Blog</title>
    <meta name="description" content="Bienvenu sur ce blog spécialisé de l'univers Warhammer. Venez discuter de votre passion avec d'autres la partageant et continuez ainsi à faire vivre cet univers">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <nav class="nav">
        <a href="#" class="logo-place center-flex ">
            <img src="Médias/Warhammer.png" alt="Logo du site" class="logo">
        </a>
        <div id="side-nav" class="side-nav">
            <a href="#" id="close" class="close">x</a>
            <ul>
                <?php  
                        require_once 'Back/controller-session.php';
                        $session->linkSessionSideNav();  
                ?>
            </ul>
        </div>
        <div class="burger center-flex" id="burger-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <?php  $session->linkSessionNav() ?>
    </nav>
    <main>
        <div id="modal" class="undisplayed modal" role="dialog" aria-modal="true" aria-labelledby="#modal-title" tabindex="-1">
            <h5 class="title" id="modal-title">Cookies</h5>
            <p>Ce site utilise des cookies pour une expérience optimale,veuillez accepter leur utilisation</p>
            <label for="choice">J'accepte l'utilisation des cookies</label>
            <input type="checkbox" name="choice" id="choice" value="true">
            <button type="submit">Confirmer</button>
        </div>
        <h1 class="title">Warhammer Blog</h1>
        <p class="title">Le blog spécialisé Warhammer réunissant 20 000 fans à travers la France !!</p>
        <img src="Médias/illustration-fans.jpg" alt="Fans en délire" class="image">
        <p class="title">Sur ce site, vous trouverez des informations complètes concernant le lore de l'univers Warhammer.</p>
        <p class="title">Vous y trouverez aussi différents articles disponibles.</p>
        <p class="title">De plus, en vous créant un compte vous pourrez poster vos propres articles et ainsi discuter avec la communauté sur un sujet qui vous paasionne !</p>
        <h2 class="title">Les derniers articles</h2>
        <?php 
            require_once 'Back/controller-database.php';
            $database->displayArticlesResumeIndex();
        ?>
        <a href="articles.php" class="link-articles"><button class="button-articles">Voir tous les articles</button></a>
    </main>
    <footer class="footer">
        <p class="title-left center-flex">Nous contacter</p>
        <ul class="list-left">
            <li>Notre téléphone : <a href="tel:0123456789">0123456789</a></li>
            <li>Notre mail : <a href="mailto:mail@example.com">mail@example.com</a></li>
        </ul>
        <p class="title-right center-flex">Pour en savoir plus</p>
        <ul class="list-right">
            <li>Notre <a href="politiqueconf.html">Politique de confidentialité</a></li>
            <li>Nos partenaires : <a href="#">Liste des partenaires</a></li>
        </ul>
    </footer>
    <script src="JS/modal.js"></script>
    <script src="JS/side-nav.js"></script>
    <script src="JS/no-articles.js"></script>
</body>
</html>