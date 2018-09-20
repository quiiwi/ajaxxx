$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault();
        insertAbonnes();
    });
    function insertAbonnes(){
        var prenom = $("#prenom").val();
        var parameters = 'prenom=' + prenom;
        $.post('ajax.php', parameters, function(data){
           console.log(data);
        }, 'json')
    }
});