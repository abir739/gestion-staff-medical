
<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Nouvelle filière</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
                       
             <div class="panel panel-primary margetop60">
                <div class="panel-heading">Veuillez saisir les données de la nouvelle filère</div>
                <div class="panel-body">
                    <form method="post" action="insertFiliere.php" class="form">
						
                        <div class="form-group">
                             <label for="niveau">Nom du personnel:</label>
                            <input type="text" name="nomF" 
                                   placeholder="Nom du personnel"
                                   class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="niveau">spécialité:</label>
				            <select name="niveau" class="form-control" id="niveau">
                                <option value="q">chirurgie</option>
                                <option value="t">anesthésie</option>
                                <option value="ts" selected></option>
                                <option value="l"></option>
                                <option value="m"></option> 
				            </select>
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