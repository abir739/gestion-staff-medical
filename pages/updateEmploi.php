<?php
    require_once('identifier.php');
    require_once('connexiondb.php');

    $ide=isset($_POST['idE'])?$_POST['idE']:0;

    $nome=isset($_POST['nomE'])?$_POST['nomE']:"";

    $specialite=isset($_POST['specialite'])?strtoupper($_POST['specialite']):"";
    
    $requete="update emploi set nomEmploi=?,specialite=? where idEmploi=?";

    $params=array($nome,$specialite,$ide);

    $resultat=$pdo->prepare($requete);

    $resultat->execute($params);
    
    header('location:emploi.php');
?>