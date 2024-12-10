<?php 
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
        require_once 'Back/controller-database.php';
    }  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel</title>
    <meta name="description" content="Votre espace client permettant d'y modifier vos informations et autres...">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/espace.css">
</head>
<body>
    <nav class="nav">
        <a href="index.php" class="logo-place center-flex">
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
    <?php if(isset($_COOKIE['PHPSESSID']) && $database->accessCreationArticleOrSpace($_SESSION['id-client'])):  ?>
    <main>
        <?php $database->displayInfosClientSpace($_SESSION['id-client']); ?>
        <p class="center">Nombre d'articles écrits : <?= $database->countArticlesClient($_SESSION['id-client']) ?> </p>
        <ul class="list-espace">
            <?php  $database->linkSArticlesAuthorSpace($_SESSION['id-client']) ?>
        </ul>
        <div class="buttons">
            <a href="Back/deconnexion.php" class="placement-deco"><button class="button-espace deconnexion">Se déconnecter</button></a>
            <a href="creationarticle.php" class="placement-crea"><button class="button-espace creation">Écrire un article</button></a>
        </div>
    </main>
    <?php else: ?>
    <main>
        <h1 class="title">Accès interdit</h1>
        <p class="title">Vous n'avez pas le droit d'accéder à cette page</p>
        <p class="title">Veuillez retourner à l'accueil et vous connecter avec votre compte : <a href="index.php">Ici</a></p>
    </main>
    <?php endif; ?>
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
    <script src="JS/side-nav.js"></script>
</body>
</html>