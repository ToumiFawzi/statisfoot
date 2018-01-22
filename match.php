<?php 
session_start();
include("header_entraineur.php");
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
  
   

    

    <div class="container">
      <h3>Match</h3>

        
        

        
    </div>


    
    </body>    
    
</html>    
