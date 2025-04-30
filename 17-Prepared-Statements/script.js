const editModal = document.getElementById('edit-product')
if (editModal) {
    editModal.addEventListener('show.bs.modal', event => {

        const snoInput = editModal.querySelector('.js-sno-input');
        const titleInput = editModal.querySelector('.js-title-input');
        const priceInput = editModal.querySelector('.js-price-input');
        const imgInput = editModal.querySelector('.js-img-input');

        // Button that triggered the modal
        const button = event.relatedTarget

        // Extract info from data-bs-* attributes
        const sno = button.getAttribute('data-bs-sno');
        const title = button.getAttribute('data-bs-title');
        const price = button.getAttribute('data-bs-price');
        const img = button.getAttribute('data-bs-img');


        // Update the modal's content.
        snoInput.value = sno;
        titleInput.value = title;
        priceInput.value = price;
        imgInput.value = img;
    })
}

const deleteModal = document.getElementById('delete-product')
if (deleteModal) {
    deleteModal.addEventListener('show.bs.modal', event => {

        const snoInput = deleteModal.querySelector('.js-sno-dlt-input');

        // Button that triggered the modal
        const button = event.relatedTarget

        // Extract info from data-bs-* attributes
        const sno = button.getAttribute('data-bs-sno');
        
        // Update the modal's content.
        snoInput.value = sno;
    })
}