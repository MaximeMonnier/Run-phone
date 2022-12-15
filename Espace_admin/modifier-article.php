<?php
$bdd = new PDO ('mysql:host=localhost;dbname=espace_admin;','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupArticle = $bdd->prepare('SELECT * FROM artcles WHERE id = ? ');
    $recupArticle->execute(array($getid));
    if($recupArticle->rowCount() > 0){
        $articleInfo = $recupArticle->fetch();
        $titre = $articleInfo['titre'];
        $description = str_replace('<br />', '', $articleInfo['description']);

        if(isset($_POST['valider'])){
            $titre_saisie = htmlspecialchars($_POST['titre']);
            $description_saisie = htmlspecialchars($_POST['description']);
    
            $update_article = $bdd->prepare('UPDATE artcles SET titre = ?, description = ? WHERE id = ?');
            $update_article->execute(array($titre_saisie, $description_saisie, $getid));
            header('Location: article.php');
        }
        
    }else{
        echo "Aucun article trouver";
    }
}else{
    echo "Aucun identifiant trouver";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modier Article</title>
</head>
<body>
    <form method="post">
        <input type="text" name="titre" value="<?= $titre; ?>">
        <br>
        <textarea name="description" cols="30" rows="10"><?= $description; ?></textarea>
        <br>
        <input type="submit" name="valider">
    </form>
    <a href="artcile.php">Retour aux articles</a>
    
</body>
</html>