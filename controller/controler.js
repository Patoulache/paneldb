TOWER = {

    btn : "",
    params : "",
    aff : "",
    ent : "",

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
        TOWER.ent = document.querySelectorAll("#col");
        TOWER.ent.forEach(TOWER.setListener);
        console.log(TOWER.ent);
   /*      for (var i = 0; i < TOWER.ent.length; i++) {
            TOWER.setListener(TOWER.ent[i]);
        } */
    },
    
    setListener : function (el) {
        console.log("hoho :",el);
        el.addEventListener("click",TOWER.collapse);
        
    },

    collapse : function () {
        console.log("yes");
        var entry = document.querySelectorAll(".entreeH");
        if (entry.className == "entreeH") {
            entry.className = "entreeV";
        } else {
            entry.className = "entreeH";
        };
    }

}

window.onload = TOWER.init;