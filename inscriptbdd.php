<?php
//on récupère les valeurs du formulaire

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

 try
 {//Connexion à la base de donnée

	$bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8', 'statisfoot', 'yjnRTeqXKgStt29S');
     /*
    $sql = "INSERT INTO `utilisateur` (`nom`, `prenom`) VALUES ('$nom', '$prenom')";
       */ 


} catch (PDOException $e) {
    http_response_code(500);
    die();
}
 
/*
mysql_connect("localhost", "statisfoot", "yjnRTeqXKgStt29S");
mysql_select_db("statisfoot");
 */
 
if(isset($_POST["nom"]) and isset($_POST['prenom']))
    {  
    /*
                                    $nom = addslashes(mysql_real_escape_string($_POST['nom']));
                    $prenom = addslashes(mysql_real_escape_string($_POST['prenom']));
                    */
                             
        $result =$bdd->exec("INSERT INTO utilisateur (nom, prenom) VALUES('" . $nom . "', '" . $prenom . "')");
}
?>
