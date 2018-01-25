<?php 
session_start();
  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot','statisfoot','yjnRTeqXKgStt29S');

 //securité// 
 if(isset($_GET['id']) AND $_GET['id'] > 0)
 {
    $getid = intval($_GET['id']); 
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
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
           <li><a href="deconnexion.php"><span class="glyphicon glyphicon-user"></span> déconnexion</a></li>
         </ul>
       </div>
     </div>
   </nav>
     
       <a href="pageprincipal.php"> <img id="logo" src="img/logo2.png" alt="logostatisfoot" /></a>
       <div id="titre">Statisfoot <br/> Ensemble, révélons les stars de demain!</div>
   </header>


    
    
    <div class="container">
      <h3>Equipe</h3>

        
        

        
    </div>

<?php
    include("footer.php");?>

    
    </body>    
    
</html>    
