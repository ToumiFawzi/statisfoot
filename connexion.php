<?php
session_start();
include("header.php");
  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8','statisfoot','yjnRTeqXKgStt29S');

//déclaration des variables
if(isset($_POST['formconnect']))
{
    if (isset($_POST['identifiant'])) {
    $identifiant = $_POST['identifiant'];
}
    if (isset($_POST['password'])) {
    $mdp = sha1($_POST['password']);
}
       
}
//vérification si l'utilisateur existe

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
                header("Location: entraineurs.php?id= ".$_SESSION['id']);
                $_SESSION['connect'] = true;
            }
        else{
                $erreur= 'identifiant ou mot de pas incorrect ou inéxistant';
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/styleco.css">
        <title>Page de connexion</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    Se connecter
                                </div>
                                <div class="col-xs-6">
                                    S'enregitrer en tant qu'<br/>
                                    <a href="inscription.php"> ambassadeur</a>
                                    <a href="inscriptionentraineur.php"> entraineur</a>
                                    <a href="inscription.php"> recruteur</a>

                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="" method="post" role="form" style="display: block;">

                                        <div class="form-group">
                                            <input type="text" name="identifiant" id="identifiant" tabindex="1" class="form-control" placeholder="identifiant" value="">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="mot de passe">
                                        </div>

                                        <input id="connection" type="submit" name="formconnect" value="Se connecter ">

                                        <input type="button" onclick="window.location.replace('connexion.php')" value="Annuler" />

                                        <br/>
                                        <br/>
                                        <br/>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="" tabindex="5" class="forgot-password">mot de passe oublié ?</a>
                                                        <?php if(isset ($erreur)){ 
                                                        echo '<font color="red">'.$erreur.'</font>';}?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
