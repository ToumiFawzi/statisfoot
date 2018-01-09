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

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
                    <a class="navbar-brand" href="pageprincipal.php">Statisfoot</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="entraineurs.php">Accueil</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="effectif.php">Equipe </a>

                        </li>
                        <li><a href="match.php">Match</a></li>
                        <li><a href="statistique.php">Statistique</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="pageprincipal.php"><span class="glyphicon glyphicon-user"></span> déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <a href="pageprincipal.php"> <img id="logo" src="img/logo2.png" alt="logostatisfoot" /></a>
        <div id="titre">Statisfoot <br/> Ensemble, révélons les stars de demain!</div>
    </header>

    <div class="container">
        <h3>Effectif</h3>



        <div class="info">Entrainé par: <br/> Nom du club:
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
    
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot','root','fawzi');
     
     
    // On recupere tout le contenu de la table news
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
