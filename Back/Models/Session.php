<?php 

class Session 
{
    //Liens de navigations en desktop selon connexion ou non de l'utilisateur
    public function linkSessionNav() {
        if(isset($_SESSION['id-client'])) {
            echo '<a href="lore.php" class="undisplayed nav-lore">Lore</a>';
            echo '<a href="articles.php" class="undisplayed nav-articles">Articles</a>';
            echo '<a href="espaceclient.php" class="undisplayed nav-connexion">Mon espace</a>';
        } else {
            echo '<a href="lore.php" class="undisplayed nav-lore">Lore</a>';
            echo '<a href="articles.php" class="undisplayed nav-articles">Articles</a>';
            echo '<a href="connexion.html" class="undisplayed nav-connexion">Se connecter</a>';
        }
    }

    //Liens de navigations en mobile selon connexion ou non de l'utilisateur
    public function linkSessionSideNav() {
        if(isset($_SESSION['id-client'])) {
                echo '<li><a class="list" href="espaceclient.php">Mon espace</a></li>';
                echo '<li><a class="list" href="lore.php">Lore</a></li>';
                echo '<li><a class="list" href="articles.php">Articles</a></li>';
        } else {
                echo '<li><a class="list" href="connexion.html">Se connecter</a></li>';
                echo '<li><a class="list" href="lore.php">Lore</a></li>';
                echo '<li><a class="list" href="articles.php">Articles</a></li>';
        }
    }

    //Déconnecte l'utilisateur en supprimer le cookie PHPSESSID et ses informations contenues dans la variable de session
    public function deconnexion() {
        setcookie('PHPSESSID', '', time() - 3600, '/');
        unset($_COOKIE['PHPSESSID']);
        unset($_SESSION['id-client']);
    }
}