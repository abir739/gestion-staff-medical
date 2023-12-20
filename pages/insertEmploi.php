<?php

    require_once('identifier.php');
    require_once('connexiondb.php');
    
    $nome=isset($_POST['nomE'])?$_POST['nomE']:"";
    $specialite=isset($_POST['specialite'])?strtoupper($_POST['specialite']):"";
    
    $requete="insert into emploi(nomEmploi,specialite) values(?,?)";
    $params=array($nome,$specialite);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    
    header('location:emploi.php');
?>