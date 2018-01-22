<?php
session_start(); // on démarre la session

       // si la variable de session existe
  if(isset($_SESSION['id']) && $_SESSION['connect'] == 1) 
    { 
    include"headerco.php";
    } 
  else
    {
    include"header.php";
    }
?>

<!doctype html>
<html lang="fr">

<head>
    <title>StatisFoot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="styles/style.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
    
    <h1>STATISFOOT</h1>
    <div class="centre">
        <br/>
        <p><strong>STATISFOOT</strong> est la <strong> première plateforme participative </strong> destinée à détecter les talents et à donner une meilleure visibilité aux joueurs évoluant dans les championnats amateurs et peu médiatisés.</p>


        <div class="first">
            <a href="connexion.php"><img src="img/ambassadeurs.png" alt="ambassadeurs"></a>
            <h4>Passionnés de foot</h4>



            <p>Devenez ambassadeurs STATISFOOT ! Participez à la collecte des données lors des matchs et gagnez de nombreux cadeaux.</p>
        </div>

        <div class="second">
               <?php
                 if(isset($_SESSION['id']) && $_SESSION['connect'] == 1){ ?>
                <a href="entraineurs.php?id=<?php echo $_SESSION['id']; ?>"><img src="img/entraineur.png" alt="entraineur"></a> 
                 <?php }
                else {?>
                <a href="connexion.php"><img src="img/entraineur.png" alt="entraineur"></a> 
                <?php }
                ?>
            <h4>Entraîneurs</h4>
            <p>Suivez au quotidien les performances de vos joueurs et de vos adversaires grâce à nos statistiques.</p>
        </div>


        <div class="third">
            <a href="connexion.php"><img src= "img/recruteurs.png"  alt="recruteurs"></a>
            <h4>Recruteurs/Agents</h4>

            <p>Accédez à notre base de données de joueurs évoluant aux 4 coins du monde.</p>
        </div>

    </div>

</body>

</html>
