<?php

require 'connexion.php';

extract($_POST);

//$_POST = array(
    //'employe' => 'yakine'
//);
//extract() fait $employe = 'yakine'

$resultat = $pdo -> prepare("INSERT INTO abonnes (prenom) VALUES (:prenom)");
$resultat -> bindParam(':prenom',$employe, PDO::PARAM_STR);

if($resultat -> execute()){
    echo 'OK';
}else{
    echo 'Erreur';
}