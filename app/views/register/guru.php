<form action="<?= baseurl ?>Register/tambahguru" method="POST">
    <div class="form-group">
        <label for="nuptk">Nuptk</label>
        <input type="number" class="form-control" id="nuptk" name="nuptk" placeholder="NUPTK"> <br>
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"> <br>
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail"> <br>
        <label for="password">Password</label>
        <input type="password" name="passw" id="password" class="form-control" placeholder="Password"> <br>
        <label for="pelajaran">Mapel Mengajar</label>
        <select name="pelajaran" id="pelajaran" class="form-control">
            <option value="1">Pendidikan Agama</option>
            <option value="2">Pendidikan Kewarganegaraan</option>
            <option value="3">Bahasa Indonesia</option>
            <option value="4">Matematika (Wajib)</option>
            <option value="5">Bahasa Inggris</option>
            <option value="6">Seni Dan Prakarya</option>
            <option value="7">Pendidikan Jasmani</option>
            <option value="8">Fisika</option>
            <option value="9">Kimia</option>
            <option value="10">Matematika (Minat)</option>
            <option value="11">Biologi</option>
            <option value="12">Sosiologi</option>
            <option value="13">Geografi</option>
            <option value="14">Ekonomi</option>
            <option value="15">Sejarah</option>
            </select> <br>
            <button type="submit" value="kirim"> Daftar </button>
    </div>
</form>