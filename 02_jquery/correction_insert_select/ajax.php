<?php
require 'connextion.php';
extract($_POST);
$resultat = $pdo -> prepare("INSERT INTO abonnes (prenom) VALUES (:prenom");
$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
$resultat -> execute();

$resultat = $pdo -> query("SELECT * FROM abonnes");

$data['resultat'] = '';
while($employes = $resultat -> fetch(PDO::FETCH_ASSOC)){
    $data['resultat'] .= '<tr>';
    $data['resultat'] .= '<td>' . $employes['id_abonne'] . '</td>';
    $data['resultat'] .= '<td>' . $employes['prenom'] . '</td>';
    $data['resultat'] .= '</tr>';
}

echo json_encode($data);