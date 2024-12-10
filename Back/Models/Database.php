<?php

class Database 
{
    private $pdo;

    public function __construct()
    {
       $this->pdo = new PDO('mysql:host=localhost;port=8889;dbname=blog', 'root', 'root');
    }

    //Verification pas de double adresse mail pour les clients
    public function preventDuplication(string $email) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT mail FROM client WHERE mail = ?');
            $pdoStatement->bindValue(1, $email, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                $mail = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                return $mail;
            } else {
                echo 'Une erreur est survenue';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Evitez pseudos en double
    public function preventDuplicationPseudo(string $pseudo) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT name FROM client WHERE name = ?');
            $pdoStatement->bindValue(1, $pseudo, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                $alias = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                return $alias;
            } else {
                echo 'Une erreur est survenue';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Creation client
    public function creationClient(string $mail, string $pass, string $name, string $avatar) {
        try {
            $pdoStatement = $this->pdo->prepare('INSERT INTO client VALUES (UUID(), ?, ?, ?, ?)');
            $password = password_hash($pass, PASSWORD_BCRYPT);
            $pdoStatement->bindValue(1, $mail, PDO::PARAM_STR);
            $pdoStatement->bindValue(2, $password, PDO::PARAM_STR);
            $pdoStatement->bindValue(3, $name, PDO::PARAM_STR);
            $pdoStatement->bindValue(4, $avatar, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                echo 'Client créé<br>';
                echo '<a href="../connexion.html">Connectez-vous avec vos identifiants !</a>';
            } else {
                echo 'Une erreur est survenue';
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Connexion client
    public function connexionClient(string $login, string $password) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT id_client, mail, password FROM client WHERE mail = ?');
            $pdoStatement->bindValue(1, $login, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Clients');
            if($pdoStatement->execute()) {
                $client = $pdoStatement->fetch();
                $pass = $client->getPasswordClient();
                if(password_verify($password, $pass)) {
                    session_start();
                    $_SESSION['id-client'] = $client->getIdClient();
                    header('Location: ../index.php');
                } else {
                    echo 'Mot de passe incorrect';
                }
            } else {
                echo 'Identifiants inconnus';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage du titre de l'article dans la balise title
    public function displayArticleDetailTitle(string $id_article) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT title FROM article WHERE id_article = ?');
            $pdoStatement->bindValue(1, $id_article, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                $title = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                return $title['title'];
            } else {
                echo 'Une erreur est survenue';
            }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
    }

    //Affichage article détaillé
    public function displayArticleFull(int $id) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT title, text, image_article, author, DATE_FORMAT(date_article, "%d-%m-%Y") AS date_article FROM article WHERE id_article = ?');
            $pdoStatement->bindValue(1, $id, PDO::PARAM_INT);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Articles');
            if($pdoStatement->execute()) {
                    $articleInformations = $pdoStatement->fetch();
                    if($articleInformations == false) {
                        header('Location: ../Blog/error.html');
                    } else {
                        echo '<h1 class="detail-title">'.$articleInformations->getTitleArticle().'</h1>';
                        echo '<img alt="Illustration concernant l\'article" src="Médias/'.$articleInformations->getImageArticle().'" class="article-illustration">';
                        echo '<div class="detail-infos">';
                        echo '<p class="detail-date">Publié le : '.$articleInformations->getDateArticle().'</p>';
                        $this->displayAuthorArticle($articleInformations->getAuthorArticle());
                        echo '</div>';
                        echo '<p>'.$articleInformations->getTextArticle().'</p>';
                    }
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage de l'auteur de l'article détaillé
    public function displayAuthorArticle(string $id_author) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT name, avatar FROM client WHERE id_client = ?');
            $pdoStatement->bindValue(1, $id_author, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Clients');
            if($pdoStatement->execute()) {
                $client = $pdoStatement->fetch();
                    echo '<img src="Avatars/'.$client->getAvatarClient().'" alt="avatar" class="detail-avatar">';
                    echo '<p class="detail-name">'.$client->getNameClient().'</p>';
                } else {
                    echo 'Une erreur est survenue';
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
    }

    //Affichage des commentaires dans les articles détaillés
    public function displayComments(string $id_article) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT text_comment, DATE_FORMAT(`date_comment`, "%d-%m-%Y %T") AS date_comment, author_comment, article FROM comment WHERE article = ? ORDER BY date_comment');
            $pdoStatement->bindValue(1, $id_article, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Comments');
            if($pdoStatement->execute()) {
                while($comment = $pdoStatement->fetch()) {
                    echo '<article class="comment">';
                    echo '<div class="identity">';
                    $this->displayAuthorInfosCommentsAndIndex($comment->getAuthorComment(), false);
                    echo '</div>';
                    echo '<p class="comment-text">'.$comment->getTextComment().'</p>';
                    echo '<p class="comment-date">'.$comment->getDateComment().'</p>';
                    echo '</article>';
                } 
            } else {
                echo 'Une erreur est survenue';
            }

            } catch (PDOException $e) {
                echo $e->getMessage();
        }
    }
    

    //Affichage des 2 extraits d articles dans la page d'accueil
    public function displayArticlesResumeIndex() {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT id_article, title, LEFT(text, 120) AS text, author, DATE_FORMAT(date_article, "%d-%m-%Y") AS date_article FROM article ORDER BY id_article DESC LIMIT 2');
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Articles');
            if($pdoStatement->execute()) {
                    while($articles = $pdoStatement->fetch()) {
                        echo '<article class="article-resume">';
                        $this->displayAuthorInfosCommentsAndIndex($articles->getAuthorArticle(), true);
                        echo '<h4 class="title-article">'.$articles->getTitleArticle().'</h4>';
                        echo '<p class="resume">'.$articles->getTextArticle().'...</p>';
                        echo '<a href="articles-details.php?id='.$articles->getIdArticle().'"><button class="button">Suite...</button></a>';
                        echo '<span class="date-article">'.$articles->getDateArticle().'</span>';
                        echo '</article>';
                    }
                }
                }
         catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage infos auteur des commentaires et des resumes d articles en page d'accueil
    public function displayAuthorInfosCommentsAndIndex(string $id_client, bool $index) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT name, avatar FROM client WHERE id_client = ?');
            $pdoStatement->bindValue(1, $id_client, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Clients');
            if($pdoStatement->execute()) {
                $client = $pdoStatement->fetch();
                if($index) {
                    echo '<img src="Avatars/'.$client->getAvatarClient().'" alt="avatar" class="avatar">';
                    echo '<p class="article-author center-flex">'.$client->getNameClient().'</p>';
                } else {
                    echo '<img src="Avatars/'.$client->getAvatarClient().'" alt="avatar" class="comment-avatar">';
                    echo '<p>'.$client->getNameClient().'</p>';
                }
                } else {
                    echo 'Une erreur est survenue';
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
    }

    //Nombre articles écrits dans espace client
    public function countArticlesClient(string $id_client) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT COUNT(*) AS Articles FROM article WHERE author = ?');
            $pdoStatement->bindValue(1, $id_client, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                $response = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                return $response['Articles'];
            } else {
                echo 'Une erreur est survenue';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage liens de ses articles dans espace client
    public function linkSArticlesAuthorSpace(string $id_client) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT id_article, title FROM article WHERE author = ?');
            $pdoStatement->bindValue(1, $id_client, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Articles');
            if($pdoStatement->execute()) {
                while($article = $pdoStatement->fetch()) {
                    echo '<li><a href="articles-details.php?id='.$article->getIdArticle().'">'.$article->getTitleArticle().'</a></li>';
                }
            } else {
                echo 'Une erreur est survenue';
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Conditionnement de l'accès à l'interface de création d'article ou l'espace client ou poster un commentaire
    public function accessCreationArticleOrSpace(string $id) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT * FROM client WHERE id_client = ?');
            $pdoStatement->bindValue(1, $id, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                return $pdoStatement->fetch(PDO::FETCH_ASSOC);
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage infos clients dans espace client
    public function displayInfosClientSpace(string $id) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT id_client, mail, name, avatar FROM client WHERE id_client = ?');
            $pdoStatement->bindValue(1, $id, PDO::PARAM_STR);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Clients');
            if($pdoStatement->execute()) {
                $infosClient = $pdoStatement->fetch();
                echo '<h2 class="center">'.$infosClient->getNameClient().'</h2>';
                echo '<img src="Avatars/'.$infosClient->getAvatarClient().'" alt="photo de profil" class="avatar-espace">';
                echo '<h3 class="center">Votre profil :</h3>';
                echo '<p class="center"><b>Adresse mail : </b> '.$infosClient->getMailClient().'</p>';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Appelé à la création d'un article
    public function creationArticle(string $title, string $text, string $image, string $author) {
        try {
            $pdoStatement = $this->pdo->prepare('INSERT INTO article(title, text, image_article, author, date_article) VALUES(?,?,?,?,CURRENT_DATE())');
            $pdoStatement->bindValue(1, $title, PDO::PARAM_STR);
            $pdoStatement->bindValue(2, $text, PDO::PARAM_STR);
            $pdoStatement->bindValue(3, $image, PDO::PARAM_STR);
            $pdoStatement->bindValue(4, $author, PDO::PARAM_STR);
            if($pdoStatement->execute()) {
                echo 'Votre article a bien été créé<br>';
                echo 'Allez y jeter un oeil en cliquant <a href="../articles.php">ici</a>';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Création d'un commentaire
    public function postComment(string $text, string $author, int $article) {
        try {
            $pdoStatement = $this->pdo->prepare('INSERT INTO comment(text_comment, author_comment, article) VALUES (?,?,?)');
            $pdoStatement->bindValue(1, $text, PDO::PARAM_STR);
            $pdoStatement->bindValue(2, $author, PDO::PARAM_STR);
            $pdoStatement->bindValue(3, $article, PDO::PARAM_INT);
            if($pdoStatement->execute()) {
                echo '<p>Votre commentaire a bien été posté</p>';
                echo '<p>Revenir à la page de l\'<a href="../articles-details.php?id='.$article.'">article</a></p>';
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //FAIRE PAGINATION ARTICLES

    public function paginationLinks() {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT COUNT(*) AS nombre FROM article');
            if($pdoStatement->execute()) {
                $nombre = $pdoStatement->fetch(PDO::FETCH_ASSOC);
                for($i = 1; $i <= ceil($nombre['nombre'] / 5); $i++) {
                    echo '<a class="avoir" href="?page='.$i.'">'.$i.'</a> ';
                }
            } else {
                echo 'Une erreur est survenue';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //Affichage des articles dans la page dédiée
    public function displayArticlesPagination(int $page) {
        try {
            $pdoStatement = $this->pdo->prepare('SELECT id_article, title, LEFT(text, 120) AS text, image_article, author, DATE_FORMAT(date_article, "%d-%m-%Y") AS date_article FROM article ORDER BY date_article DESC LIMIT :start,5');
            $pdoStatement->bindValue(':start', 5 * ($page - 1) ,PDO::PARAM_INT);
            $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Articles');
            if($pdoStatement->execute()) {
                while($articles = $pdoStatement->fetch()) {
                    echo '<article class="article-resume">';
                    $this->displayAuthorInfosCommentsAndIndex($articles->getAuthorArticle(), true);
                    echo '<h4 class="title-article">'.$articles->getTitleArticle().'</h4>';
                    echo '<p class="resume">'.$articles->getTextArticle().'...</p>';
                    echo '<a href="articles-details.php?id='.$articles->getIdArticle().'"><button class="button">Suite...</button></a>';
                    echo '<span class="date-article">'.$articles->getDateArticle().'</span>';
                    echo '</article>';
                }
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}