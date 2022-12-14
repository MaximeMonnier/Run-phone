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
</head>
<body>

<!-- Afficher les membres -->
<?php
    $recupUsers = $bdd->query('SELECT*FROM membres');
    while($user = $recupUsers->fetch()){
        ?>
        <p><?= $user ['pseudo']; ?> <a href="bannir.php?id=<?= $user['id']; ?>">Bannir le membre</a></p>
        <?php
    }
?>
<!-- fin Afficher les membres -->
    
</body>
</html>