<?php 
    require_once 'Back/controller-database.php';
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();
    }  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $database->displayArticleDetailTitle($_GET['id']) ?></title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/article-detail.css">
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
    <main>
        <?php $database->displayArticleFull($_GET['id']) ?>
    </main>
    <section>
        <h2 class="detail-title">Commentaires</h2>
        <?= $database->displayComments($_GET['id']) ?>
        <?php if(isset($_COOKIE['PHPSESSID']) && $database->accessCreationArticleOrSpace($_SESSION['id-client'])):  ?>
        <fieldset class="comment-form">
            <legend>Poster un commentaire</legend>
            <form method="post" action="Back/postcomment.php">
                <label for="comment">Votre commentaire</label>
                <textarea id="comment" name="comment" placeholder="Faites part de votre avis..." class="textarea"></textarea>
                <input type="hidden" value="<?= $_GET['id'] ?>" name="article">
                <button type="submit">Poster le commentaire</button>
            </form>
        </fieldset>
        <?php else: ?>
        <h3 class="title">Si vous souhaitez poster un commentaire veuillez être connecté !</h3>
        <?php endif; ?>
    </section>
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