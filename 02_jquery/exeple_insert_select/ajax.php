<?php

require 'connexion.php'

extract($_POST);

$resultat = $pdo -> prepare("INSERT INTO abonnes (prenom) VALUES (:prenom)");
$resultat -> bindParam(':prenom', $inputprenom, PDO::PARAM_STR);

if($resultat -> execute()){
    $tab['validation'] = 'OK';
}else{
    $tab['validation'] = 'ERREUR';
}
echo json_encode($tab);