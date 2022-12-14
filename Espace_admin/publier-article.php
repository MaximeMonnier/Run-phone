
<?php
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espace_admin;','root','');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}

if(isset($_POST['envoi'])){

    if(!empty($_POST['titre']) AND !empty($_POST['descritpion'])){

    }else{
        echo "Veuillez compléter tous les champs..."
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un article</title>
</head>
<body>
    <form method="post">
        <input type="text" name="titre">
        <br>
        <textarea name="description"></textarea>
        <br>
        <input type="submit" name="envoi">
    </form>
    
</body>
</html>
