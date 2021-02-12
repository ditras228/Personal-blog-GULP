const burger = document.getElementById('burger');
const sidebar = document.getElementById('sidebar');
const page = document.getElementById('page');
const body = document.body;
burger.addEventListener('click', event => {

    if (body.classList.contains('show_sidebar')) {
        closeSidebar();
    } else {
        showSidebar();
    }
});

function showSidebar() {
    let mask = document.createElement('div');
    mask.classList.add('page_mask');
    mask.addEventListener('click', closeSidebar);
    page.appendChild(mask);

    body.classList.add('show_sidebar');
}

function closeSidebar() {
    body.classList.remove('show_sidebar');
    document.querySelector('.page_mask').remove();
}