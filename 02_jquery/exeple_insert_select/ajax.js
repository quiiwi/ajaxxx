$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        ajouterAbonnes();
    });

    function ajouterAbonnes(){
        prenom = $('#prenom').val();
        parameters = 'inputprenom=' + prenom;
        $.post("ajax.php", parameters, function(valider){
            if(valider.validation == 'OK'){
                $('#resultat').append('<p style="background:green;color:white;padding:2px">L\'employé a été enregistré </p>');
                $('#prenom').val("");
            }
        }, 'json');
    }
});