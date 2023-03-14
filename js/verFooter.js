var botao = document.querySelector('.container .saiba-mais');
var chevron = document.querySelector('.container .saiba-mais i');
var conteudoFooter = document.querySelectorAll('.container .footer-content .footer-item');

botao.addEventListener('click', ()=>{
    if(chevron.classList.contains('rodar')){
        chevron.classList.remove('rodar');
    }else {
        chevron.classList.add('rodar');
    }

    conteudoFooter.forEach((value, indice)=>{
        if(conteudoFooter[indice].classList.contains('esconder')){
            conteudoFooter[indice].classList.remove('esconder');
            document.querySelector('.container .saiba-mais span')
            .innerHTML = 'Ver menos';
        }else {
            conteudoFooter[indice].classList.add('esconder');
            document.querySelector('.container .saiba-mais span')
            .innerHTML = 'Ver mais';
        }
    });
});