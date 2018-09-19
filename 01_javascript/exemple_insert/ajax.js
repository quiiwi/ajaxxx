// fonction permettant de lancer les traitements à l'évènement "click"
document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("submit").addEventListener('click', function(event){
        event.preventDefault(); // Annule le comportement initial du submit
        totoInsert();
    });

    function totoInsert(){
        toto = new XMLHttpRequest(); // On récupère un objet XMLHttpRequest qui nous permet de faire des requêtes HTTP.
        //if(!window.XMLHttpRequest){
        // toto = new ActiveXObject("Microsoft.XMLHTTP")}
        var info = document.getElementById('prenom');
        var prenom = info.value;
        // On récupère ce qui a été saisie dans le champs prenom
        console.log(prenom);
        var parameters = "employe=" + prenom;
        toto.open("POST", "ajax.php", false);
        toto.setRequestHeader('Content-type', "application/x-www-form-urlencoded");
        toto.send(parameters);
        console.log(parameters);
        console.log(toto.responseText);
        console.log(toto.readyState);
        if(toto.readyState == 4 && toto.status == 200){
            console.log(toto.responseText);
            if(toto.responseText == 'OK'){
                document.getElementById("resultat").innerHTML = '<p style="background:green;color:white;padding:2px">L\'employé a été enregistré </p>';
                document.getElementById("prenom").value='';
            }
        }
    }
});