AJAX = {
    
    init : function(smth) {

        var req = new XMLHttpRequest;
            req.onload = function() {
            var retour = req.responseText;
            console.log(retour);
            alert(retour);
            }
        req.open('POST', './index.php', true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(smth);

    
    }
    
}