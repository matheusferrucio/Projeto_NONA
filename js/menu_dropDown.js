let btnMenu = document.querySelectorAll('.header2 ul .link-produtos');
let navMenu = document.querySelectorAll('.header2 ul .link-produtos .nav-sub-menu');
let chevron = document.querySelectorAll('.header2 ul li .fa-chevron-down');
let aberto = false;

// btnMenu.forEach((value, indice)=>{
//     btnMenu[indice].addEventListener('click', ()=>{
//         if(aberto == false){
//             navMenu[indice].classList.add('aparecer');
//             chevron[indice].classList.add('rotacionar');
//             aberto = true;
//         }else {
//             navMenu[indice].classList.remove('aparecer');
//             chevron[indice].classList.remove('rotacionar');
//             aberto = false;
//         }
//     });
// });

function resetarMenu(){
    for(var i = 0; i < navMenu.length; i++){
        navMenu[i].style.opacity = 0;
        chevron[i].classList.remove('rotacionar');
    }
}

btnMenu.forEach((valor, indice)=>{
    btnMenu[indice].addEventListener('click', ()=>{
        resetarMenu();
        if(aberto == false){
            navMenu[indice].style.opacity = 1;
            chevron[indice].classList.add('rotacionar');
            aberto = true;
        }else {
            navMenu[indice].style.opacity = 0;
            chevron[indice].classList.remove('rotacionar');
            aberto = false;
        }
    });
});