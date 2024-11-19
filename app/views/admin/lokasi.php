 <!-- Konten Formulir -->
 <div class="container">
        <div class="help-section">
            <h2>Formulir Lokasi Tsunami</h2>
            <p>Silakan isi data berikut untuk melaporkan tsunami yang terjadi:</p>
            <img src="<?=baseurl?>img/REMOVE.svg" alt="Logo Help" class="logo-help">
        </div>
        
        <form action="<?=baseurl?>admin/tambahlokasi" method="post" enctype="multipart/form-data">
            
        
            <div class="form-group">
                <label for="location">Sumber:</label>
                <input type="text" id="location" name="Sumber" required>
            </div>

            <!-- Nama -->
            <div class="form-group">
                <label for="name" required>Lintang (Latitude):</label>
                <input type="text" id="name" name="latitude" required>
            </div>
            
            
            <div class="form-group">
                <label for="location">Bujur (Longitude):</label>
                <input type="text" id="location" name="longitude" required>
            </div>
            
            
            <div class="form-group">
                <label for="location">Tanggal:</label>
                <input type="date" id="location" name="Tanggal" required>
            </div>
            
            
            <div class="form-group">
                <label for="location">Jam:</label>
                <input type="time" id="location" name="waktu" required>
            </div>
            
            <div class="form-group">
                <label for="name" required>Magnitudo:</label>
                <input type="text" id="name" name="magnitudo" required>
            </div>

            <input type="submit" value="Kirim Data">
        </form>
    </div>