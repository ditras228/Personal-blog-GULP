const body = document.body;

const modal = document.querySelectorAll('.modal');
const modalBtn = document.querySelectorAll('[data-modal]');
const modalClose = document.querySelectorAll('.modal_close');

modalBtn.forEach(item => {
    item.addEventListener('click', event => {
        let $this = event.currentTarget;
        let modelId = $this.getAttribute('data-modal');
        let modal = document.getElementById(modelId);
        let modalContent = modal.querySelector('.modal_content');
        modalContent.addEventListener('click', event => {
            event.stopPropagation();
        })
        modal.classList.add("show");
        body.classList.add("no-scroll");

        setTimeout(function () {
            modalContent.style.transform = 'none'
            modalContent.style.opacity = '1'
        }, 1);

    });
});
modalClose.forEach(item => {
    item.addEventListener('click', event => {
        let currentModal = event.target.closest('.modal');
        closeModal(currentModal)
    });
});
modal.forEach(item => {
    item.addEventListener('click', event => {
        let currentModal = event.target.closest('.modal');
        closeModal(currentModal)

    });
});

function closeModal(currentModal) {

  
        let modalContent = currentModal.querySelector('.modal_content');
        modalContent.removeAttribute('style');
      setTimeout(() => {
        currentModal.classList.remove("show");
        body.classList.remove("no-scroll"); 
    }, 250)


}
