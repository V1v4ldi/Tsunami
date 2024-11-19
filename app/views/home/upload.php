 <!-- Konten Formulir -->
 <div class="container">
        <div class="help-section">
            <h2>Formulir Orang Hilang</h2>
            <p>Silakan isi data berikut untuk melaporkan orang yang hilang:</p>
            <img src="<?=baseurl?>img/REMOVE.svg" alt="Logo Help" class="logo-help">
        </div>

        <form action="<?=baseurl?>admin/tambahdata" method="post" enctype="multipart/form-data">
            <!-- Nama -->
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" id="name" name="nama" required>
            </div>

            <!-- Foto -->
            <div class="form-group">
                <label for="photo">Foto:</label>
                <input type="file" id="photo" name="image" accept="image/*" required>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" name="jk" required>
                    <option value="Laki - Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea id="address" name="alamat" required rows="4"></textarea>
            </div>

            <!-- No Telepon Keluarga -->
            <div class="form-group">
                <label for="phone">Nomor Telepon Keluarga:</label>
                <input type="tel" id="phone" name="hubungi" required>
            </div>

            <!-- Lokasi Hilang -->
            <div class="form-group">
                <label for="location">Lokasi Hilang:</label>
                <input type="text" id="location" name="lok-hilang" required>
            </div>

            <input type="submit" value="Kirim Data">
        </form>
    </div>