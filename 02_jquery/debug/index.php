<?php

// Ce fichier se connecte à la BDD entreprise, et interroge la table Employes. On récupère les infos de tous les employes, et on affiche les infos dans un tableau HTML. 

$pdo = new PDO("mysql:host=localhost;dbname=bibliotheque", "root", "");

$resultat = $pdo -> query("SELECT * FROM livre");

$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Tous les employés de l'entreprise : </h1>

<table border="1px">


	<?php foreach($employes as $emp) : ?>
	<tr>

		<?php foreach($emp as $info) : ?>

			<td><?= $info ?></td>

		<?php endforeach; ?>

	</tr>
	<?php endforeach;?>


</table>