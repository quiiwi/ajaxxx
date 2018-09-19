<?php

require 'connexion.php';

extract($_POST);


$resultat = $pdo -> prepare("DELETE FROM abonnes WHERE id_abonne = :id");
$resultat -> bindParam(':id', $id, PDO::PARAM_INT);
$resultat -> execute();

$resultat = $pdo -> query("SELECT * FROM abonnes");

$tab['resultat'] = '';

while($abonnes = $resultat -> fetch(PDO::FETCH_ASSOC)){
    $tab['resultat'] .= '<option value="'. $abonnes['id_abonne'] .'">' . $abonnes['prenom'] . '</option>';
}
$tab['validation'] = 'OK';

echo json_encode($tab);