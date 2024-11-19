document.addEventListener('DOMContentLoaded', function() {
    const editLinks = document.querySelectorAll('.edit-btn');
    const editPopup = document.querySelector('.popup');
    const editForm = document.getElementById('edit-form');
    const editId = document.getElementById('edit-id');
    const editNama = document.getElementById('edit-nama');
    const editAlamat = document.getElementById('edit-alamat');
    const editJk = document.getElementById('edit-jk');
    const editHubungi = document.getElementById('edit-hubungi');
    const editLokHilang = document.getElementById('edit-lok-hilang'); 
    const editStatus = document.getElementById('edit-status');

    editLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); 

            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const alamat = this.getAttribute('data-alamat');
            const jk = this.getAttribute('data-jk');
            const hubungi = this.getAttribute('data-hubungi');
            const lokHilang = this.getAttribute('data-lok-hilang');
            const status = this.getAttribute('data-status');

            
            editId.value = id;
            editNama.value = nama;
            editAlamat.value = alamat;
            editJk.value = jk;
            editHubungi.value = hubungi;
            editLokHilang.value = lokHilang;
            editStatus.value = status;


            editPopup.style.display = 'flex';
        });
    });

    editPopup.addEventListener('click', function(event) {
        if (event.target === editPopup) {
            editPopup.style.display = 'none';
        }
    });
});