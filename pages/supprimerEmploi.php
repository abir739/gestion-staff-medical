<?php
            
            require_once('connexiondb.php');
            $ide=isset($_GET['idE'])?$_GET['idE']:0;

                $requete="delete from emploi where idEmploi=?";
                $params=array($ide);
                $resultat=$pdo->prepare($requete);
                $resultat->execute($params);
                
                header('location:emploi.php');
    
    
    
    
?>