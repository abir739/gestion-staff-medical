<?php
        session_start();
        if(isset($_SESSION['user']) ){
            
            if($_SESSION['user']['role']=='ADMIN'){
               
                require_once('connexiondb.php');
                
                $idG=isset($_GET['idG'])?$_GET['idG']:0;

                $requete="delete from gestionnaire where idGestionnaire=?";
                
                $params=array($idG);
                
                $resultat=$pdo->prepare($requete);
                
                $resultat->execute($params);
                
                header('location:gestionnaires.php'); 
                
            }else{
                $message="Vous n'avez pas le privilège de supprimer un gestionnaire!!!";
                
                $url='gestionnaires.php';
                
                header("location:alerte.php?message=$message&url=$url"); 
            }
           
        }else {
                header('location:login.php');
        }
?>