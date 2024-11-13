<div class="wrapper">
    <form action="<?= baseurl ?>admin/tambahdata" method="POST" enctype="multipart/form-data">
        <h1>Upload</h1>
        <div class="input-box">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="file" name="image" required>
            <i class='bx bxs-image'></i>
        </div>
        <div class="input-box">
            <input type="text" name="alamat" placeholder="Alamat" required>
            <i class='bx bxs-map'></i>
        </div>
        <div class="input-box">
            <select name="jk" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="text" name="hubungi" placeholder="Nomor Telepon" required>
            <i class='bx bxs-phone'></i>
        </div>
        <div class="input-box">
            <button class="btn" type="submit">Upload</button>
        </div>
    </form>
</div>