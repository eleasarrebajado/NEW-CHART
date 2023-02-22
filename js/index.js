let comVarBtn = document.querySelectorAll(".components");
let letbrachVar = document.querySelector(".branches-container");
// this is the end of components division end ================================


comVarBtn.forEach(comVal => {
    comVal.addEventListener("click", ()=>{
        branchFunct();
    })
});

function branchFunct(){
    letbrachVar.classList.toggle("sample");
}


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









