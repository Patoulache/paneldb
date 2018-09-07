AJAX = {

    req : new XMLHttpRequest,
    btn : "",

    init : function () {
        AJAX.btn = document.querySelectorAll("button");
        // console.log(AJAX.btn);
        AJAX.btn.forEach(AJAX.initListener);
    },
    
    initListener : function (el) {
        /*console.log("ok");
        console.log(el);*/
        // el.addEventListener("click",AJAX.test,true);
       // console.log(el);
       // console.log(el.dataset["zone"]);
        el.addEventListener("click",AJAX.test,true);


    },

    test : function (e) {
        // var btnTarget = e.target;
       // console.log("ok");
        console.log(e.target.getAttribute("data-zone"));
        // switch ()
    }

}

window.onload = AJAX.init;