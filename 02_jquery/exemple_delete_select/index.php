<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <title>jQuery Delete Select</title>
</head>
<body>
    <form action="" method="post">
        <select name="abonnes" id="abonnes">
            <?php 
                require 'connexion.php';
                $abonnes = $pdo -> query("SELECT * FROM abonnes") -> fetchAll(PDO::FETCH_ASSOC);

                foreach($abonnes as $abo){
                    echo '<option value="'. $abo['id_abonne'] .'">' . $abo['prenom'] . '</option>';
                }
            ?>
        </select>
        <input type="submit" id="submit" value="Supprimer">
    </form>


</body>
</html>