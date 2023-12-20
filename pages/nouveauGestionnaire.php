<?php
    require_once('identifier.php');
    require_once('connexiondb.php');
   
    $requeteE="select * from emploi";
    $resultatE=$pdo->query($requeteE);

?>
<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Nouveau gestionnaire</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
                       
             <div class="panel panel-primary margetop60">
                <div class="panel-heading">Les infos du nouveau gestionnaire :</div>
                <div class="panel-body">
                    <form method="post" action="insertGestionnaire.php" class="form"  enctype="multipart/form-data">
						
                    <div class="form-group">
                             <label for="nom">Nom :</label>
                            <input type="text" name="nom" placeholder="Nom" class="form-control"/>
                        </div>
                        <div class="form-group">
                             <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="civilite">Civilité :</label>
                            <div class="radio">
                                <label><input type="radio" name="civilite" value="F" checked/> F </label><br>
                                <label><input type="radio" name="civilite" value="M"/> M </label>
                            </div>
                        </div>

                        <div class="form-group">
                             <label for="date">Date de naissance :</label>
                            <input type="date" name="date" placeholder="Date de naissance" class="form-control"/>
                        </div>
                        <div class="form-group">
                        <label for="nomEmploi">Emploi:</label>
			            <select name="nomEmploi" class="form-control" id="nomEmploi">
                            
                            <option >Infirmiere</option>
                            <option >Secretaire </option>
                            <option >Surveillante</option>
                            <option >Responsable du bloc </option>
                            <option >Directeur</option> 
                            <option selected>Médicin</option>
			            </select>
                        </div><br>

                        <div class="form-group">
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
			            </select>
                        </div>

                        <div class="form-group">
                             <label for="tel">Téléphone:</label>
                            <input type="tel" name="tel" placeholder="Téléphone" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                             <label for="photo">Photo :</label>
                            <input type="file" name="photo" />
                        </div>

				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button> 
                      
					</form>
                </div>
            </div>   
        </div>      
    </body>
</HTML>