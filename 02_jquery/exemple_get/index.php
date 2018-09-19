<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#action").click(function(event){
                $.ajax({
                    url : "info.txt",
                    dataType : "text",
                    success : function(data){
                        $("#resultat").html(data);
                    }
                });
            });
        });

    </script>
    <title>jQuery Get</title>
</head>
<body>
    <button id="action">Charger le fichier</button>
    <div id="resultat"></div>
</body>
</html>