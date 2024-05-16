<div class="controller mt-5">

<div class="row">
    <div class="col-6">
        <h3>Daftar Guru</h3>
        <?php foreach($data['guru'] as $guru) : ?>
            <ul>
                <li><?= $guru['nuptk'];?></li>
                <li><?= $guru['nama'];?></li>
                <li><?= $guru['email'];?></li>
                <li><?= $guru['id_pelajaran'];?></li>
            </ul>
        <?php endforeach;?>
        </div>
    </div>
</div>