<?php
//connection a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8', 'statisfoot', 'yjnRTeqXKgStt29S');
/*on récupère les valeurs du formulaire*/
if(isset($_POST['forminscription']))
{  
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $club = $_POST['club'];
    $numfff = $_POST['numfff'];
    $categorie = $_POST['categorie'];
    $niveau = $_POST['niveau'];
    $identifiant = $_POST['identifiant'];
    $mdp = sha1($_POST['password']);
    $mdpv = sha1($_POST['vpassword']);
    $equipe = $_POST['equipe'];
    $message = "inscription validée";
    
          if($_POST['password'] ==$_POST['vpassword'])
              
              {
                  //ecrire sur la tables entraineurs
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
               $req_user =$bdd->prepare("INSERT INTO membres(identifiant, motdepasse) VALUES(:identifiant, :motdepasse)");
               $req_user->execute(array(
               'identifiant' => $identifiant,
               'motdepasse' => $mdp, 
            
               ));

     
                /*ecrire table categories*/
               $req_cat =$bdd->prepare("INSERT INTO `categories`(`categorie`) VALUES(:categorie)");
               $req_cat->execute(array(
               'categorie' => $categorie,
            
                ));
     
            /*ecrire table clubs*/
             $req_club = $bdd->prepare("INSERT INTO `clubs`(`club`, `numfff`, `niveau`) VALUES(:club, :numfff, :niveau)");
             $req_club->execute(array(
             'club' => $club, 
             'numfff' => $numfff,
             'niveau' => $niveau,
             ));
     
           /*ecrire table equipes*/
            $req_eq =$bdd->prepare("INSERT INTO `equipes`(`equipe`) VALUES(:equipe)");
            $req_eq->execute(array(
            'equipe' => $equipe,
            
             ));
              
             /*if($req. $req_user. $req_cat. $req_eq == 1)
             {
                
             } */
              echo $message;
             header('Location: connexion.php');
             /*else{
                 echo "Erreur lors de l'inscription";
             }*/
        
    }
 else{
        $erreur = "Vos mot de passe ne sont pas identiques ";
    }
    
  
}
?>


    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="styles/style.css" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <header>
            <a href="pageprincipal.php"> <img id="logo" src="img/logo2.png" alt="logostatisfoot" /></a>

            <div id="titre">Statisfoot <br/> Ensemble, révélons les stars de demain!</div>
        </header>
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">

                        <h1> Inscription Entraîneur<br/> <small> Merci de renseigner vos informations </small></h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?php if(isset($nom)){echo $nom; }?>" autofocus required/>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" value="<?php if(isset($prenom)){echo $prenom; }?>"required/>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-offset-2 col-md-3 ">
                        <div class="form-group ">
                            <label for="ville ">Ville</label>
                            <input type="text " name="ville" class="form-control " id="ville " placeholder="Ville" value="<?php if(isset($ville)){echo $ville; }?>"required/>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3 ">
                        <div class="form-group ">
                            <label for="pays ">Pays</label>
                            <input type="text " name="pays" class="form-control " id="pays " placeholder="Pays" value="<?php if(isset($pays)){echo $pays; }?>" required/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="tel">Téléphone</label>
                            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Téléphone" value="<?php if(isset($tel)){echo $tel; }?>" required/>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="email">Adresse Mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Entrer email"value="<?php if(isset($email)){echo $email; }?>" required />
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="club">Club</label>
                            <input type="text" name="club" class="form-control" id="club" placeholder="Nom du club" value="<?php if(isset($club)){echo $club; }?>" required/>
                        </div>
                    </div>

                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="numfff">Numéro d'affiliation FFF</label>
                            <input type="text" name="numfff" class="form-control" id="numfff" placeholder="ID FFF" value="<?php if(isset($numff)){echo $numfff; }?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="categorie">catégorie</label>
                            <select id="categorie" name="categorie" class="form-control"value="<?php if(isset($categorie)){echo $categorie; }?>" required>
        <option selected>choisir...</option>
        <option>U 13</option>
        <option>U 14</option>
        <option>U 15</option>
        <option>U 16</option>
        <option>U 17</option>
        <option>U 18</option>
        <option>U 19</option>
        <option>Sénior</option>
      </select>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="equipe">Equipe</label>
                            <select id="equipe" name="equipe" class="form-control"value="<?php if(isset($equipe)){echo $equipe; }?>" required>
        <option selected>choisir...</option>
        <option>Equipe 1 </option>                       
        <option>Equipe 2</option>
        <option>Equipe 3</option>
      </select>
                        </div>
                    </div>

                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="niveau">Niveau</label>
                            <select id="niveau" name="niveau" class="form-control"value="<?php if(isset($niveau)){echo $niveau; }?>" required>
        <option selected>choisir...</option>
        <option>DISTRICT 1</option>
        <option>DISTRICT 2</option>
        <option>DISTRICT 3</option>
        <option>DISTRICT 4</option>
        <option>DISTRICT 5</option>
        <option>FOOT LOISIR CRITERIUM  </option>
        <option>FOOT LOISIR CRITERIUM 1 </option>
        <option>FOOT LOISIR CRITERIUM 2 </option>
        <option>FOOT LOISIR CRITERIUM 3 </option>
        <option>REGIONAL  EST</option>
        <option>REGIONAL 1 EST</option>
        <option>REGIONAL 2 EST</option>
        <option>REGIONAL 3 EST</option>
      </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-4 col-md-3">
                        <div class="form-group">
                            <label for="identifiant">Identifiant</label>
                            <input type="text" name="identifiant" class="form-control" id="identifiant" placeholder="clubcatégorie"value="<?php if(isset($identifiant)){echo $identifiant; }?>" required>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe"  required/>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="vpassword">vérification du mot de passe</label>
                            <input type="password" name="vpassword" class="form-control" id="vpassword" placeholder="retaper mot de passe" required />
                            <?php
        if(isset($erreur))
        {
            echo '<font color="red">'.$erreur.'</font>';
        }
        ?>
                        </div>
                    </div>


                </div>

                <center><a href="connexion.php">Déjà un compte ? Connectez vous </a></center>


                <br/>

                <button type="submit" name="forminscription" value="s'inscrire">inscription</button>
                <input id="annu" type="button" onclick="window.location.replace('inscriptionentraineur.php ')" value="Annuler" />
            </form>

        </div>
    </body>

    </html>
