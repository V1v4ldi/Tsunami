<div class="controller mt-5">

<div class="row">
    <div class="col-6">
        <h3>Daftar Murid</h3>
        <?php foreach($data['siswa'] as $siswa) : ?>
            <?php if($siswa['jurusan'] == 1) {
                $siswa['jurusan'] = "IPA";
            } else {
                $siswa['jurusan'] = "IPS";
            } ?>
            <ul>
                <li><?= $siswa['nama'];?></li>
                <li><?= $siswa['jurusan'];?></li>
                <li><?= $siswa['jurusan'] .'-'. chr($siswa['id_kelas'] + 64);?></li>
                <li><?= $siswa['ayah'];?></li>
                <li><?= $siswa['ibu'];?></li>
                <li><?= $siswa['nisn'];?></li>
            </ul>
        <?php endforeach;?>
        </div>
    </div>
</div>
