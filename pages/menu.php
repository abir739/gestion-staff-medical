
<?php
    require_once('identifier.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"> <?php // pour rendre la page s'adapte à la taille de l'écran ?>
       <div class="navbar-header"> <?php // pour ajouter le menu ?>
		  <a href="../index.php" class="navbar-brand">Gestion de compétences staff médical</a> <?php // pour créer le lien vers la page d'acceuille ?>
		</div>
		<ul class="nav navbar-nav">
					<li><a href="gestionnaires.php">Le Staff Médical</a></li>
					&nbsp;
					
					&nbsp;
			        
					<?php if ($_SESSION['user']['role']=='ADMIN') {?>

						<li><a href="emploi.php">
							<i class="fa fa-users"></i>
							&nbsp Les emplois
						</a>
					</li>
					
					<li><a href="Utilisateurs.php">
							<i class="fa fa-users"></i>
							&nbsp Les utilisteurs
						</a>
					</li>
					
				<?php }?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
					
			<li>
				<a href="editerUtilisateur.php?id=<?php echo $_SESSION['user']['iduser'] ?>">
                    <i class="fa fa-user-circle-o"></i>
					<?php echo  ' '.$_SESSION['user']['login']?>
				</a> 
			</li>
			
			<li>
				<a href="seDeconnecter.php">
                    <i class="fa fa-sign-out"></i>
					&nbsp Se déconnecter
				</a>
			</li>
							
		</ul>
		
		
	</div>
</nav>