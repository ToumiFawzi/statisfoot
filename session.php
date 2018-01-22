<?php 
session_start();
  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot','statisfoot','yjnRTeqXKgStt29S');

if(isset($_POST['identifiant']) && isset($_POST['password'])) {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE identifiant = ? AND motdepasse = ? ");
        $requser -> execute(array($identifiant,$mdp));  
            $userexist = $requser->rowCount();
         if($userexist == 1)
            {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['identifiant'] = $userinfo['identifiant'];
                $_SESSION['password'] = $userinfo['password'];
                $_SESSION['connect'] = true; 
         }
}
?>

