AJAX = {
    
    init : function(smth) {

        var req = new XMLHttpRequest;
        req.open('POST', './index.php', true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(smth);
        // console.log("ok");
        // var retour = (req.responseText);
        // console.log("non");
    }
    
}