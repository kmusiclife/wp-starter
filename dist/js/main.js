

const hamburger = document.getElementById('hamburger');
const myOffcanvas = document.getElementById('offcanvasWithBothOptions')

myOffcanvas.addEventListener('show.bs.offcanvas', event => {
    hamburger.classList.add('active');
});
myOffcanvas.addEventListener('hide.bs.offcanvas', event => {
    hamburger.classList.remove('active');
});
