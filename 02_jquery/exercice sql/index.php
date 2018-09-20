<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <title>Jquery Insert Select</title>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>ID personne</th>
            <th>Adresse</th>
        </tr>

        <?php 
            require 'connexion.php';

            //la requête : SELECT a.prenom, l.livre, l.titre, e.date_sortie, e.date_rendu
            //           : FROM emprunt e
            //           : INNER JOIN abonnes a ON a.id_abonne = e.id_abonne
            //           : INNER JOIN livre l ON l.id_livre = e.id_livre
            //           : WHERE l.titre = 'Une vie'






            $adresse = $pdo -> query("SELECT * FROM adresse WHERE adresse = 'pourquoi je me deteste'") -> fetchAll(PDO::FETCH_ASSOC);
            

            foreach($adresse as $ad){

                echo '<tr>
                        <td style="border: 1px solid black;"> '. $ad['id_adresse'] .' </td>
                        <td style="border: 1px solid black;"> '.$ad['id_personne'] .' </td>
                        <td style="border: 1px solid black;"> '.$ad['adresse'] .' </td>
                    </tr>';
                    
            
            }
        ?>

    </table>
</body>
</html>