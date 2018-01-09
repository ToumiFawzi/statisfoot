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


   
      <h3>Ajouter un joueur</h3>
        <br/>
        <br/>
   
        <br/>
        <br/>
         <div class="container">
                  <form action="creationbdd.php" method="post">
        
        <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" autofocus  />
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" />
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-offset-2 col-md-3 ">
                        <div class="form-group ">
                            <label for="datedenaissance">Date de naissance</label>
                            <input type="text " class="form-control " id="datedenaissance" name="datedenaissance" placeholder="Date de naissance"/>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3 ">
                        <div class="form-group ">
                            <label for="nationalite">Nationalité</label>
                            <input type="text " class="form-control " id="nationalite" name="nationalite" placeholder="nationalite" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="taille">Taille </label>
                            <input type="text" class="form-control" id="taille" name="taille" placeholder="Taille">
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="poids">Poids</label>
                            <input type="text" class="form-control" id="poids" name="poids" placeholder="Poids" />
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="diplome">Diplome</label>
                            <select id="diplome" name="diplome" class="form-control" >
        <option selected>choisir...</option>
        <option>Aucun</option>
        <option>Brevet</option>
        <option>Baccalauréat</option>
        <option>BTS/DUT</option>                          
        <option>Licence</option>
        <option>Master</option>
        <option>Doctorat</option>
      </select>
                        </div>
                    </div>

                    <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="poste">Poste</label>
                            <select id="poste" name="poste" class="form-control">
        <option selected>choisir...</option>
        <option>ATTAQUANT CENTRAL </option>
        <option>ATTAQUANT GAUCHE</option>
        <option>ATTAQUANT DROIT</option>
                                
        <option>DEFENSEUR CENTRAL</option>                       
        <option>DEFENSEUR GAUCHE</option>
        <option>DEFENSEUR DROIT</option>
        
        <option>MILIEU OFFENSIF</option>
        <option>MILIEU GAUCHE</option>
        <option>MILIEU RELAYEUR</option>
        <option>MILIEU DROIT</option>
        <option>MILIEU DEFENSIF</option>
                                
        <option>GARDIEN</option>
      </select>
                        </div>
                    </div>
                </div>
                
   
                    
                    <div class="row">
                    <div class="col-md-offset-2 col-md-3">
                        <div class="form-group">
                            <label for="situation">Situation professionnelle</label>
                            <select id="situation" name="situation" class="form-control" >
        <option selected>choisir...</option>
        <option>Sans activité</option>
        <option>Collégien</option>
        <option>Lycéen</option>
        <option>Etudiant</option>
        <option>Salarié</option>
    
      </select>
                        </div>
                    </div>
            
 <div class="col-md-offset-1 col-md-3">
                        <div class="form-group">
                            <label for="equipe">Equipe</label>
                            <select id="equipe" name="equipe" class="form-control" >
        <option selected>choisir...</option>
        <option>Equipe 1 </option>                       
        <option>Equipe 2</option>
        <option>Equipe 3</option>
      </select>
                        </div>
                    </div>
                </div>
 <br/>
           <br/> <br/>
           <br/>
        <br/>
           <br/> <br/>
           <br/>
            <button type="submit" value="S'inscrire">Inscrire</button>
            
                    
            <input id="retour" type="button" onclick="window.location.replace('effectif.php')" value="Terminer" />

            <input id="annu" type="button" onclick="window.location.replace('creation.php')" value="Annuler" />
 
                    
                                </div>       
                    
                    </form>
                      
                      </div>  
                    
        
        
     
        
    </body>
    
</html>
        
        
        
   
