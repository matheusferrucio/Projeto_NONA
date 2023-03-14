let btnMobile = document.querySelector('.menu-mobile li i.fa-bars');
let menuMobile = document.querySelector('.menu-mobile li .botoes-mobile');

btnMobile.addEventListener('click', ()=>{
    btnMobile.classList.add('efeito-botao')
    menuMobile.classList.add('aparecer');
});