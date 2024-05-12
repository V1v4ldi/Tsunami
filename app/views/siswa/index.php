<div class="controller mt-5">

<div class="row">
    <div class="col-6">
        <h3>Daftar Murid</h3>
        <?php foreach($data['siswa'] as $siswa) : ?>
            <ul>
                <li><?= $siswa['nama'];?></li>
                <li><?= $siswa['nrp'];?></li>
                <li><?= $siswa['email'];?></li>
            </ul>
        <?php endforeach;?>
        </div>
    </div>
</div>
