let listaElements=document.querySelectorAll('.list_button--click');
let abrir = document.querySelector('.abrir');
let cerrar = document.querySelector('.cerrar');


listaElements.forEach(listas=>{
    listas.addEventListener('click',()=>{
        

        listas.classList.toggle('arrow');
        let height=0;
        let menu=listas.nextElementSibling;
        if(menu.clientHeight=="0"){
            height=menu.scrollHeight;
        }

        menu.style.height=height+"px";



    })
});