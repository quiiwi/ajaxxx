<?php
require 'connexion.php';

//MA REQUETE PREPAREE NE MARCHE PAS ET JE NE SAIS PAS POURQUOI, FILS DE ...

//echo json_encode($_POST);

extract($_POST);



$resultat = $pdo -> prepare("INSERT INTO livre (titre, auteur) VALUES (:titre, :auteur)");

$resultat -> bindParam(':titre', $titre, PDO::PARAM_STR);
$resultat -> bindParam(':auteur', $auteur, PDO::PARAM_STR);

if($resultat -> execute()){
    $data['validation'] = 'OK';
}else{
    $data['validation'] = 'ERREUR';
}
echo json_encode($data);



