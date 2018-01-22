<?php 
session_start();
include("header_entraineur.php");
  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8','statisfoot','yjnRTeqXKgStt29S');

 //securité// 
 if(isset($_GET['id']) AND $_GET['id'] > 0)
 {
    $getid = intval($_GET['id']); 
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
     $userinfo = $requser->fetch();
     
     //recuperer des donné sur la tables clubs
     $req = $bdd->prepare('SELECT * FROM clubs WHERE id =?');
     $req->execute(array($getid));
     $clubpers = $req->fetch(); 
     
     $reqniv = $bdd->prepare('SELECT * FROM equipe');
 }

?>
<!doctype html>
<html lang="fr">

<head>
    <title>StatisFoot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="styles/effectif.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

   

    <div class="container">
        <h3>Effectif</h3>


        <div class="info">Entrainé par: <?php echo $userinfo['nom'];?> <br/> 
                          Nom du club:  <?php echo $clubpers['clubs']; ?> <br/>
                          Niveau:         <br/>
        </div>
        <h4>Echo equipe</h4>

       <center> <table>
            <CAPTION> liste des joueurs </CAPTION>
            <tr>
                <th> Poste</th>
                <th> Nom</th>
                <th> Prénom</th>
            </tr>

            <?php
try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot','statisfoot','yjnRTeqXKgStt29S');
      
    // On recupere tout le contenu de la table joueurs
$reponse = $bdd->query('SELECT poste, nom, prenom FROM joueurs');
  
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
        <a href="creation.php"><button type="button" class="btn btn-primary btn-lg"><p>Créer une équipe</p></button></a>
    </div>



</body>

</html>
