<?php 
session_start();

  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8','statisfoot','yjnRTeqXKgStt29S');

 //on cherche l'id qui est egale a l id de la session // 
 if(isset($_GET['id']) AND $_GET['id'] > 0)
 {
    $getid = intval($_GET['id']); 
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = $_SESSION[id]");
    $requser->execute(array($getid));
     $userinfo = $requser->fetch();
     
    
 }

?>
<!doctype html>
<html lang="fr">

<head>
     <title>StatisFoot</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link href="styles/effec.css" media="all" rel="stylesheet" type="text/css" />
    
</head>

<body>
    
<header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
                    <a class="navbar-brand" href="index.php?id=<?php echo $_SESSION['id']; ?>">Statisfoot</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="entraineurs.php?id=<?php echo $_SESSION['id']; ?>">Accueil</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="effectif.php?id=<?php echo $_SESSION['id']; ?>">Equipe </a>

                        </li>
                        <li><a href="match.php?id=<?php echo $_SESSION['id']; ?>">Match</a></li>
                        <li><a href="statistique.php?id=<?php echo $_SESSION['id']; ?>">Statistique</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="deconnexion.php"><span class="glyphicon glyphicon-user"></span> déconnexion</a></li>
                    </ul>
                </div>
            </div>
       <img src="img/statisfoot.jpg" id="statisfoot">
        </nav>

    </header>


    <div class="container">
        <h3>Effectif</h3>

        <div class="info">Entrainé par:
            <?php echo $userinfo['nom'];?>
            <?php echo $userinfo['prenom'];?> <br/>
        </div>
      <h4> Votre Effectif</h4>

        <center>
            <table>
                <CAPTION> liste des joueurs </CAPTION>
                <tr>
                    <th> Poste</th>
                    <th> Nom</th>
                    <th> Prénom</th>
                </tr>

                <?php
try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8','statisfoot','yjnRTeqXKgStt29S');
      
    // On recupere tout le contenu de la table joueurs
$reponse = $bdd->query("SELECT poste, nom, prenom, equipe_id FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
 
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
    echo "</tr>";
    echo "<td> $donnees[poste] </td>";
    echo "<td> $donnees[nom] </td>";
    echo "<td> $donnees[prenom] </td>";
    echo "</tr>";
 
     
}
  
$reponse->closeCursor();
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

            </table>
        </center>
    </div>

    <br/>

    <div id="boutton">
        <a href="creation.php?id=<?php echo $_SESSION['id']; ?>"><button type="button" class="btn btn-primary btn-lg"><p>Créer votre effectif </p></button></a>
    </div>
    <br/>
    <br/>
    <br/>
    
<footer>
    
    <br/>
     <br/>
     <br/>
   <center> <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.facebook.com/Statisfoot/"><img src="img/icon-facebook.svg" id="fb"></a>
    <a href="http://twitter.com/STATISFOOT_"><img src="img/twitter-icon.png" id="twitter"></a>
 <img src="img/blogger.png" id="blogger"> </center>   
</footer>
   

</body>

</html>
