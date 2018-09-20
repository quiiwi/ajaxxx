<?php
require 'connexion.php';
extract($_POST);
$resultat = $pdo -> prepare("INSERT INTO abonnes (prenom) VALUES (:prenom");
$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat -> execute();

$resultat = $pdo -> query("SELECT * FROM abonnes");

$data['resultat'] = '';
while($abonnes = $resultat -> fetch(PDO::FETCH_ASSOC)){
    $data['resultat'] .= '<tr>';
    $data['resultat'] .= '<td>' . $abonnes['id_abonne'] . '</td>';
    $data['resultat'] .= '<td>' . $abonnes['prenom'] . '</td>';
    $data['resultat'] .= '</tr>';
}

echo json_encode($data);