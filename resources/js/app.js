require('./bootstrap');
require('bootstrap');

const eleOverlay = document.querySelector('.overlay');

if (eleOverlay) {
    const btnsDelete = document.querySelectorAll('.btn_delete');
    btnsDelete.forEach(btn => {
        btn.addEventListener('click', function () {
            eleOverlay.classList.remove('d-none');
            eleOverlay.querySelector('form').setAttribute('action', 'http://localhost:8000/comics/' + this.dataset.id)
        })
    })

    const eleBtnClose = eleOverlay.querySelector('btn_close');

    eleBtnClose.addEventListener('click', function() {
        eleOverlay.classList.add('d-none');
    })
}
