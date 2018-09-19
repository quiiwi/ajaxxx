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

    <form action="" method="post">
        <input type="text" id="prenom" name="prenom">
        <input type="submit" id="submit" value="Ajouter">
    </form>

    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>Prenom</th>
        </tr>

        <?php 
            require 'connexion.php';
            $abonnes = $pdo -> query("SELECT * FROM abonnes") -> fetchAll(PDO::FETCH_ASSOC);

            foreach($abonnes as $abo){
                echo '<tr>
                        <td style="border: 1px solid black;"> '. $abo['id_abonne'] .' </td>
                        <td style="border: 1px solid black;"> '.$abo['prenom'] .' </td>
                    </tr>';
            }
        ?>

    </table>
</body>
</html>