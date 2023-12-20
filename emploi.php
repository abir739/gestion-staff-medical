<?php
    
    require_once("connexiondb.php");
    $requete="select * from emploi";
    $resultatE=$pdo->query($requete);
    
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Gestion des emplois</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
            <div class="panel panel-success margetop">
          
				<div class="panel-heading">Rechercher des emplois</div>
				<div class="panel-body">
					
					<form method="get" action="emploi.php" class="form-inline">
                        
                        <label for="emploi">Emploi:</label>
			            <select name="emploi" class="form-control" id="emploi">
                            <option >Tous les emplois</option>
                            <option >Infirmiere</option>
                            <option >Secretaire </option>
                            <option >Surveillante</option>
                            <option>Responsable du bloc </option>
                            <option >Directeur</option> 
                            <option >Médicin</option>
			            </select>
                        
                        <label for="specialite">Specialité:</label>
			            <select name="specialite" class="form-control" id="specialite">
                            
                            <option >chirurgie</option>
                            <option>cancérologie médicale</option>
                            <option>gériatrie</option>
                            <option >anesthésie</option>
                            <option > gynécologie</option>
                            <option >orthopédie, hématologie</option> 
                            <option>hématologie</option>
			            </select>
			            
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            Chercher...
                        </button> 
                        
                        &nbsp;&nbsp;
                       	
                            <a href="nouvelleEmploi.php">
                            
                                <span class="glyphicon glyphicon-plus"></span>
                                
                                Nouvelle emploi
                                
                            </a>              
                         
					</form>
				</div>
			</div>
            
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des Emplois</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id emploi</th><th>Nom emploi</th><th>Specialité</th><th>Actions</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($emploi=$resultatE->fetch()){ ?>
                                <tr>
                                    <td><?php echo $emploi['idEmploi'] ?> </td>
                                    <td><?php echo $emploi['nomEmploi'] ?> </td>
                                    <td><?php echo $emploi['specialite'] ?> </td> 
                                    <td>
                                            <a href="editeremploi.php?idE=<?php echo $emploi['idEmploi'] ?>">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            &nbsp;
                                            <a onclick="return confirm('Etes vous sur de supprimer?')"
                                                href="supprimerEmploi.php?idE=<?php echo $emploi['idEmploi'] ?>">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                    </td>
                                    <?php }?>
                                    
                                </tr>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</HTML>