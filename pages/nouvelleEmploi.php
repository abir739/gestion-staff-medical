<?php 
    require_once('identifier.php');
?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Nouvelle Emploi</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        
    </head>
    <body>
        <?php include("menu.php"); ?>

        <div class="container">

        <div class="panel panel-danger margetop">
                 <div class="panel-heading">Veuillez saisir les données de la nouvelle emploi</div>
                 <div class="panel-body">
                 <form method="post" action="insertEmploi.php" class="form">

                        <div class="form-group">
                             <label for="niveau">Nom de l'Emploi:</label>
                            <input type="text" name="nomE" 
                                   placeholder="Nom de l'emploi"
                                   class="form-control"/>
                        </div>
                        <label for="emploi">Emploi:</label>
			            <select name="emploi" class="form-control" id="emploi">
                            
                            <option value="i"   >Infirmiere</option>
                            <option value="sec">Secretaire </option>
                            <option value="sur" >Surveillante</option>
                            <option value="re">Responsable du bloc </option>
                            <option value="d">Directeur</option> 
                            <option value="m" selected>Médicin</option>
			            </select><br>
                        
                        <label for="specialite">Specialité:</label>
			            <select name="specialite" class="form-control" id="specialite">
                            <option >sans specialité</option>
                            <option >chirurgie</option>
                            <option>cancérologie médicale</option>
                            <option>gériatrie</option>
                            <option >anesthésie</option>
                            <option > gynécologie</option>
                            <option >orthopédie</option> 
                            <option>hématologie</option>
			            </select><br>
			            
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button> 
                                     
                        
                   </form>
        </div>
        </div>
    </body>
</HTML>