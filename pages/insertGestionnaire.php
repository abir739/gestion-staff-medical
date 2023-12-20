<?php
    require_once('identifier.php');
    require_once('connexiondb.php');
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
    $civilite=isset($_POST['civilite'])?$_POST['civilite']:"F";
    $date=isset($_POST['date'])?$_POST['date']:"";
    
    $nomEmploi=isset($_POST['nomEmploi'])?$_POST['nomEmploi']:"";
    $specialite=isset($_POST['specialite'])?strtoupper($_POST['specialite']):"";
    $tel=isset($_POST['tel'])?$_POST['tel']:"";

    $nomPhoto=isset($_FILES['photo']['name'])?$_FILES['photo']['name']:"";
    $imageTemp=$_FILES['photo']['tmp_name'];
    move_uploaded_file($imageTemp,"../images/".$nomPhoto);

    $requete="INSERT INTO gestionnaire(nom,prenom,date,civilite,photo,nomEmploi,specialite,tel) VALUES(?,?,?,?,?,?,?,?)";
    $params=array($nom,$prenom,$date,$civilite,$nomPhoto,$nomEmploi,$specialite,$tel);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    
    header('location:gestionnaires.php');

?>