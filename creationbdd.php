<?php
/*on récupère les valeurs du formulaire*/

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datedenaissance = $_POST['datedenaissance'];
$nationalite = $_POST['nationalite'];
$taille = $_POST['taille'];
$poids = $_POST['poids'];
$diplome = $_POST['diplome'];
$poste = $_POST['poste'];
$situation = $_POST['situation'];
$equipe = $_POST['equipe'];


/*Connexion à la base de donnée*/
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8', 'statisfoot', 'yjnRTeqXKgStt29S');
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} 
catch (Exception $e)
{
   http_response_code(500);
   die('Erreur : ' . $e->getMessage());
}                            
       $req =$bdd->prepare("INSERT INTO `joueurs`(`nom`, `prenom`, `datedenaissance`, `nationalite`,`taille`, `poids`, `diplome`, `poste`, `situation`, `equipe`) VALUES(:nom, :prenom, :datedenaissance, :nationalite, :taille, :poids, :diplome, :poste, :situation, :equipe)");
       $req->execute(array(
       'nom' => $nom,
       'prenom' => $prenom,
       'datedenaissance' => $datedenaissance,
       'nationalite' => $nationalite,
       'taille' => $taille,
       'poids' => $poids, 
       'diplome' => $diplome,
       'poste' => $poste,
       'situation' => $situation,
       'equipe' => $equipe,   
       ));
echo 'Joueur ajouté avec succès!';
?>
<meta http-equiv="refresh" content="1; url=creation.php">

