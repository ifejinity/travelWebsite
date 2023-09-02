// the image modal
const imagesParent = document.querySelector("#imagesParent");
const Modal = document.querySelector("#imageModal");
const ModalImage = document.querySelector("#ModalImage");
// show modal image
imagesParent.addEventListener('click', (event) => {
    if(event.target.classList.contains('modalItems')) {
        const imgSrc = event.target.getAttribute('src');
        Modal.classList.replace('hidden', 'flex');
        ModalImage.setAttribute('src', imgSrc);
    }
})
// hide modal image
Modal.addEventListener('click', () => {
    Modal.classList.replace('flex', 'hidden');
})