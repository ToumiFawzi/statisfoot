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
        <form action="inscriptbdd.php" method="post">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1> Inscription Entraîneur<br/> <small> Merci de renseigner vos informations </small></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" autofocus required />
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" required/>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-offset-2 col-md-3 ">
                    <div class="form-group ">
                        <label for="ville ">Ville</label>
                        <input type="text " class="form-control " id="ville " placeholder="Ville" required/>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3 ">
                    <div class="form-group ">
                        <label for="pays ">Pays</label>
                        <input type="text " class="form-control " id="pays " placeholder="Pays" required/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Téléphone">
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="email">Adresse Mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrer email" required/>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="club">Club</label>
                        <input type="text" class="form-control" id="club" placeholder="Nom du club" required/>
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="num">Numéro d'affiliation FFF</label>
                        <input type="number" class="form-control" id="num" placeholder="ID FFF" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="categorie">catégorie</label>
                        <select id="categorie" class="form-control" required>
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
                        <label for="niveau">Niveau</label>
                        <select id="niveau" class="form-control" required>
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
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" class="form-control" id="identifiant" placeholder="clubcatégorie">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="vpassword">Vérification mot de passe</label>
                        <input type="password" class="form-control" id="vpassword" placeholder="Vérification mot de passe">
                    </div>
                </div>
            </div>

            <center><a href="connexion.php">Déjà un compte ? Connectez vous </a></center>


            <br/>

            <button type="submit" value="S'inscrire">inscription</button>
            <input id="annu" type="button" onclick="window.location.replace('inscriptionentraineur.php ')" value="Annuler" />
        </form>
    </div>
</body>

</html>
