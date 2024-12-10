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
    <meta name="robots" content="noindex"> <!--La page ne sera pas indexée par les robots et donc pas dispo a la recherche sur interet-->
    <title>Écriture d'un article</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/creation.css">
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
    <?php if(isset($_COOKIE['PHPSESSID']) && $database->accessCreationArticleOrSpace($_SESSION['id-client'])): ?>
    <main>
        <h1 class="title">Création d'un article</h1>
        <h2 class="title">Quelques balises à utiliser si vous voulez structurer votre texte :</h2>
        <ul>
            <li>Pour créer des paragraphes mettez les entre les balises &ltp&gt et &lt/p&gt</li>
            <li>Pour un saut de ligne utilisez &ltbr&gt</li>
            <li>Pour les titres vous pouvez utiliser les mentre entre les balises &lth2&gt et &lt/h2&gt (Augmentez le nombre pour diminuer l'importance du titre)</li>
        </ul>
        <form action="Back/creation.php" method="post" enctype="multipart/form-data">
            <label for="title">Votre titre</label>
            <input type="text" name="title" id="title" placeholder="Entrez le titre de votre article" required>
            <label for="illustration">Votre image de présentation</label>
            <input type="file" name="image" id="illustration" required>
            <label for="text">Votre texte</label>
            <textarea cols="30" rows="8" name="text" id="text" placeholder="Écrivez ici votre article"></textarea>
            <button type="submit">Créer l'article</button>
        </form>
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