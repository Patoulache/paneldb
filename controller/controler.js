TOWER = {

    btn : "",
    params : "",

    init : function () {
        TOWER.btn = document.querySelectorAll("button");
        // console.log(AJAX.btn);
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
        // console.log(champs);
        TOWER.params = "";
        champs.forEach(TOWER.ajout);
        AJAX.init(TOWER.params);


        
    },

    ajout : function (el) {

        TOWER.params+= (TOWER.params.length==0 ? "" : "&" )+el.name+"="+el.value;
    }

}

window.onload = TOWER.init;