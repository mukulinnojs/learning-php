document.addEventListener("DOMContentLoaded", () => {
  setupEditDelete();
  setupmodal();
})

function setupEditDelete() {
  const editBtns = document.querySelectorAll(".js-edit");
  const dltBtns = document.querySelectorAll(".js-delete");


  editBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      let sno = btn.dataset.sno;
    })
  });

  dltBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      let sno = btn.dataset.sno;

    })
  });
}

function setupmodal() {
  const editModal = document.getElementById('editmodal')
  if (editModal) {
    const noteTitle = document.getElementById('note-title-edit');
    const noteDesc = document.getElementById('desc-text-edit');
    const sno = document.getElementById('sno-edit');

    editModal.addEventListener('show.bs.modal', event => {
      // Button that triggered the modal
      const button = event.relatedTarget
      // Extract info from data-bs-* attributes
      const sno = button.getAttribute('data-bs-sno');
      const title = button.getAttribute('data-bs-title');
      const desc = button.getAttribute('data-bs-desc');


      sno.value = sno;
      noteTitle.value = title;
      noteDesc.value = desc;
    })
  }
}
