<?php
try {

    $pdo=new PDO("mysql:host=localhost;dbname=gestion_staff","root", ""); // pdo objet de la classe PDO permet d'accer à une base de donnée qq soit son type

}catch (Exception $e){
    die('Erreur de connexion: ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
?>
<?php // permet de connecter à la base des données ?>