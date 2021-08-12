$(function() {
    const modal = document.getElementById('modal');
    const modal_btn = document.getElementById('modal-btn');
    const close = document.querySelectorAll('.modal-close');

    modal_btn.addEventListener('click', () =>{
        setTimeout(function() {modal.classList.add('open')},1);
    });
    close.addEventListener('click', () =>{
        setTimeout(function() {modal.classList.remove('open')},1);
    });

});