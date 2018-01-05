<?php
/*on récupère les valeurs du formulaire*/

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$tel = $_POST['tel'];
$email = $_POST['email'];
/*$club = $_POST['club'];
$numfff = $_POST['number'];
$categorie = $_POST['categorie'];
$niveau = $_POST['niveau'];*/
$identifiant = $_POST['identifiant'];
$mdp = $_POST['password'];
$mdpv = $_POST['vpassword'];

/*vérification du mot de passe*/
 if($_POST['password'] ==$_POST['vpassword'])
  {
/*Connexion à la base de donnée*/
 try
 {

	$bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8', 'statisfoot', 'yjnRTeqXKgStt29S');

} 
catch (Exception $e)
{
    http_response_code(500);
    die();
}          /*ecire table entraineur*/                   
        $req =$bdd->prepare("INSERT INTO entraineurs(nom, prenom, ville, pays, tel, email) VALUES(:nom, :prenom, :ville, :pays, :tel, :email)");
        $req->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'ville' => $ville,
        'pays' => $pays,
        'tel' => $tel,
        'email' => $email,  
            
        ));
     /*ecrire table membres*/
      $req_user=$bdd->prepare("INSERT INTO membres(identifiant, motdepasse) VALUES(:identifiant, :motdepasse)");
        $req_user->execute(array(
        'identifiant' => $identifiant,
        'motdepasse' => $mdp, 
            
             ));
     
     
     
  echo 'inscription validée !';
 }
   else
    {
     echo 'mots de passes pas identiques retrourner sur la page précedente';
                      } 
?>