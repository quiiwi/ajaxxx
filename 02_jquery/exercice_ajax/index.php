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
    <div id="resultat"></div>
    <form action="" method="post">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre"> <br>
        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur" name="auteur"><br>
        <input type="submit" id="submit" value="Ajouter">
    </form>

    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>Prenom</th>
        </tr>

        <?php 
            require 'connexion.php';
            $livres = $pdo -> query("SELECT * FROM livre") -> fetchAll(PDO::FETCH_ASSOC);

            foreach($livres as $liv){
                echo '<tr>
                        <td style="border: 1px solid black;"> '. $liv['id_livre'] .' </td>
                        <td style="border: 1px solid black;"> '.$liv['titre'] .' </td>
                        <td style="border: 1px solid black;"> '.$liv['auteur'] .' </td>
                    </tr>';
            }
        ?>

    </table>
</body>
</html>