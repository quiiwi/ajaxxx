// fonction permettant de lancer les traitements à l'évènement "click"
$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault(); // Annule le comportement initial du submit
        totoInsert();
    });

    function totoInsert(){
        prenom = $('#prenom').val();
        parameters = 'abonnes=' + prenom;
        $.post("ajax.php", parameters, function(yolo){
            //yolo contient ce que le PHP nous retourne a savoir un objet Json, ou à l'indice "validation" il y aura 'ok' ou 'Erreur'
            if(yolo.validation == 'OK'){
                $('#resultat').append('<p style="background:green;color:white;padding:2px">L\'employé a été enregistré </p>');
                $('#prenom').val(""); // On vide le champ prenom
            }
        }, 'json');
    }
});