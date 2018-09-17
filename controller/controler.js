TOWER = {

    btn : "",
    params : "",
    aff : "",
    ent : "",
    tblVide : [],

    init : function () {
        TOWER.btn = document.querySelectorAll("button");
        TOWER.aff = document.querySelector("h1");
        TOWER.aff.addEventListener("click", TOWER.affichage);
        TOWER.btn.forEach(TOWER.initListener);
    },
    
    initListener : function (el) {

        el.addEventListener("click",TOWER.test);

    },

    test : function (e) {

        attName = e.target.getAttribute("data-zone");
        champs = document.querySelectorAll("input[data-zone="+"\""+attName+"\"]");
        comboBox = document.querySelectorAll("select[data-zone="+"\""+attName+"\"]");
        TOWER.params = "";
        champs.forEach(TOWER.ajout);
        comboBox.forEach(TOWER.ajout);
        AJAX.init(TOWER.params);
  
    },

    ajout : function (el) {

        TOWER.params+= (TOWER.params.length==0 ? "" : "&" )+el.name+"="+el.value;
    },

    affichage : function () {

        AJAX.init2("aff=affich");
    },

    ecouter : function() {
        var tblName = document.querySelectorAll(".table");
        for (var i = 0; i<tblName.length; i++) {
            TOWER.tblVide.push(tblName[i].innerText);            
        };
        TOWER.tblVide.forEach(function(el) {
            TOWER.ent = document.querySelectorAll("#col.".concat(el));
            TOWER.ent.forEach(TOWER.setListener);

        });
    },
    
    setListener : function (el) {

        el.addEventListener("click",TOWER.collapse);
        
    },

    collapse : function (e) {
        var test = e.target.className;
        TOWER.tblVide.forEach(function() {
            var entry = document.querySelectorAll(".entreeH.".concat(test));
            var entry1 = document.querySelectorAll(".entreeV.".concat(test));
            entry.forEach(TOWER.changeClass);
            entry1.forEach(TOWER.changeClass);
        });

    },

    changeClass : function (el) {

        if (el.classList[0] == "entreeH") {
            el.classList.replace("entreeH", "entreeV");
        } else if (el.classList[0] == "entreeV") {
            el.classList.replace("entreeV", "entreeH");
        };
    }
}

window.onload = TOWER.init;