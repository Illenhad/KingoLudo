<nav class="navbar navbar-inverse">
    <div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
      		</button>
    		<a class="navbar-brand active" href="index.php"><strong>KingoLudo</strong></a>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav">
		        <li><a href="index.php">Acceuil</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Jeux<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?action=ListJeux">Liste des Jeux</a></li>
						<li><a href="index.php?action=AjoutJeu">Ajouter un Jeux</a></li>
						<li><a href="index.php?action=ModificationJeu">Modifier un Jeux</a></li>
						<li><a href="index.php?action=SupprimerJeu">Supprimer un Jeux</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Utilisateur<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?action=ListMembre">Liste des utilisateurs</a></li>	
						<li><a href="index.php?action=AjoutUtilisateur">Ajouter un Utilisateur</a></li>
						<li><a href="index.php?action=ModificationUtilisateur">Modifier un Utilisateur</a></li>
						<li><a href="index.php?action=SupprimerUtilisateur">Supprimer un Utilisateur</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				 if(!isset($_SESSION['login'])){?>
					<li><a href="index.php?action=Connexion"><span class="glyphicon glyphicon-log-in"></span> Se Connecter</a></li>
				<?php } ?>
				<?php if(!empty($_SESSION['login'])){?>
					<li><a href="index.php?action=Deconnexion"><span class="glyphicon glyphicon-log-in"></span> Se Déconnecter</a></li>
				<?php } ?>
			</ul>
        </div>
    </div>
</nav>
