$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        insertLivre();
    });
    function insertLivre(){
        var parameters = {
            'titre'  : $("#titre").val(),
            'auteur'  : $("#auteur").val(),
            // Pour un <select> il faut faire 'sexe' : $("#sexe").find(":selected").val(),
        };
        console.log(parameters);

        $.post('ajax.php',parameters,function(data){
            console.log(data.validation);

            if(data.validation == 'OK'){
                $("#resultat").html("<p>L'employé est inséré</p>")
                $("#titre").val("");
                $("#auteur").val("");

            }

        }, 'json')
    }
});