let comVarBtn = document.querySelectorAll(".components");
let letbrachVar = document.querySelectorAll(".branches-container");
// this is the end of components division end ================================


comVarBtn.forEach((comVal, indexComval) => {
    comVal.addEventListener("click", ()=>{
        branchFunct(indexComval);
    });




    function branchFunct(){
        letbrachVar.forEach((branDrop, idx2) =>{
            if(indexComval === idx2){
                branDrop.classList.toggle("sample");
            } else {
                branDrop.classList.remove("sample");
            }
        });
    }
    
});






// this is the side nav closing division start ================================

let hideBtnSideNav = document.querySelector(".hide-btn");
let sideNav = document.querySelector(".side-nav");
let btnOpenNav = document.querySelector(".btnOpen");


hideBtnSideNav.addEventListener("click", ()=>{
    btnOpenFunct(sideNav, btnOpenNav);
})

btnOpenNav.addEventListener("click", ()=>{
    btnOpenFunct(sideNav, btnOpenNav);
})

let true1 = true;

function btnOpenFunct(sideNav, btnOpenNav){
    if(true1 === true){
        sideNav.classList.toggle("sideNavHide");
        btnOpenNav.classList.toggle("btnOpenDisplay");
        true1 = false;
    } else {
        sideNav.classList.toggle("sideNavHide");
        btnOpenNav.classList.toggle("btnOpenDisplay");
        true1 = true;
    }
}









