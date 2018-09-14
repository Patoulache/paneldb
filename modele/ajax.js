AJAX = {
    
    init : function(smth) {

        var req = new XMLHttpRequest;
            req.onload = function() {
            var retour = req.responseText;
            alert(retour);
            }
        req.open('POST', './index.php', true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(smth);

    
    },

    init2 : function(smth) {

        var cible = document.querySelector("#maman");
        var req = new XMLHttpRequest;
            req.onload = function() {
            var retour = req.responseText;
            cible.innerHTML = retour;
            TOWER.ecouter();
            }
        req.open('POST', './index.php', true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(smth);

    
    }
    
}