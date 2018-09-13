TOWER = {

    btn : "",
    params : "",
    aff : "",

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
        // var btnTarget = e.target;
        // console.log("ok");
        // console.log(e.target.getAttribute("data-zone"));
        attName = e.target.getAttribute("data-zone");
        champs = document.querySelectorAll("input[data-zone="+"\""+attName+"\"]");
        comboBox = document.querySelectorAll("select[data-zone="+"\""+attName+"\"]");
        // console.log(champs);
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
    }

}

window.onload = TOWER.init;