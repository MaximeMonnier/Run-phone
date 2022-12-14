<?php
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=espace_admin;','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT*FROM membres WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
        
        $bannirUser = $bdd->prepare('DELETE FROM membres WHERE id = ?');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');

    }else{
        echo "Aucun membre n'a été trouver";
    }

}else{
    echo "lidentifiant n'a pas été récuperer";
}
?>