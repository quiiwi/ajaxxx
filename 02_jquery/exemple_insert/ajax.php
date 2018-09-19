<?php

require 'connexion.php';

extract($_POST);

//$_POST = array(
    //'employe' => 'yakine'
//);
//extract() fait $employe = 'yakine'

$resultat = $pdo -> prepare("INSERT INTO abonnes (prenom) VALUES (:prenom)");
$resultat -> bindParam(':prenom', $abonnes, PDO::PARAM_STR);

if($resultat -> execute()){
    $tab['validation'] = 'OK';
}else{
    $tab['validation'] = 'ERREUR';
}
echo json_encode($tab);