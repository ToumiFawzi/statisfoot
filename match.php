<?php 
session_start();
include("header_entraineur.php");
  //connection à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=statisfoot;charset=utf8','statisfoot','yjnRTeqXKgStt29S');

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
    <link href="styles/pp.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

    <h3>Match</h3>
    <center><h1>EQUIPE 1 VS EQUIPE 2</h1></center> <br/>
    
<form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    
     <center><h1> Remplaçant</h1> </center>
     
<form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
    <form method="post" action="">
   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="numerojoueur">n°</label>
            <select id="numerojoueur" name="numerojoueur" >
        <option selected>choisir...</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
      </select>
        </div>
    </div>

   
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="poste">Poste</label>
            <select id="poste" name="poste" >
                                <option selected>choisir...</option>
                                <option> G </option>
                                <option>DLD </option>
                                <option>DD </option>
                                <option>DC </option>
                                <option>DG </option>
                                <option>DLG</option>
                                <option>MDC </option>
                                <option>MD </option>
                                <option>MC</option>
                                <option>MG </option>
                                <option>MOC </option>
                                <option>AD </option>
                                <option>AT </option>
                                <option>AG </option>
                                <option>AVD </option>
                                <option>BU </option>
                                <option>AVG </option>
                            </select>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-3">
        <div class="form-group">
            <label for="joueur">Joueur</label>
            <select id="joueur" name="nomjoueur">
        <option selected>choisir...</option>
        
      <?php  $reqmatch = $bdd ->query("SELECT nom, prenom FROM joueurs WHERE equipe_id = (SELECT equipes.id FROM equipes WHERE entraineur_id = $_SESSION[id])");
                while($donne = $reqmatch->fetch())
                {
               ?>
                
        <option value="<?Php echo $donne['joueurs']?>"><?php echo $donne['nom']." ". $donne['prenom'];?></option>
   <?php
    }
    ?>
      </select>
        </div>
    </div>
    </form>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
   <?php
    include("footer.php");?>
 
</body>

</html>
