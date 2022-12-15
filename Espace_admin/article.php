<?php
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espace_admin;','root','');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher tous les articles</title>
</head>
<body>
    <?php
        $recupArticles = $bdd->query('SELECT * FROM artcles');
        while($article = $recupArticles->fetch()){
            ?>
            <div class="article" style="border:solid 1px black;width:400px;padding:15px;">
                <h1><?= $article['titre']; ?></h1>
                <p><?= $article['description']; ?></p>
                <a href="suprimer-article.php?id=<?= $article['id']; ?>"><button style="color:red;cursor:pointer;">Suprimer l'article</button></a>
                <a href="modifier-article.php?id=<?= $article['id']; ?>"><button style="color:blue;cursor:pointer;">Modifier l'article</button></a>
                
            </div>
            <br>
            <?php
        }
    ?>
    <a href="admin.php">Retour au tableau de bord</a>
    <br>
    <br>
    <a href="publier-article.php">Crée un article</a>
    
</body>
</html>