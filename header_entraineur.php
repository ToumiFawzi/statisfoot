
 <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
                    <a class="navbar-brand" href="pageprincipal.php?id=">Statisfoot</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="entraineurs.php?id=<?php echo $_SESSION['id']; ?>">Accueil</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="effectif.php?id=<?php echo $_SESSION['id']; ?>">Equipe </a>

                        </li>
                        <li><a href="match.php?id=<?php echo $_SESSION['id']; ?>">Match</a></li>
                        <li><a href="statistique.php?id=<?php echo $_SESSION['id']; ?>">Statistique</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="deconnexion.php"><span class="glyphicon glyphicon-user"></span> déconnexion</a></li>
                    </ul>
                </div>
            </div>
       <img src="img/statisfoot.jpg" id="statisfoot">
        </nav>

    </header>
