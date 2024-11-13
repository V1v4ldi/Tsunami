<main>
    <section>
        <h1 class="judul">Admin</h1>
    </section>

    <section class="konten">
        <h2 class="heading-konten">
            Halaman Admin
        </h2>
        <h3 class="sub-heading-konten">
            Informasi tentang status orang yang dilaporkan hilang
        </h3>
    </section>
    <section><div class="tabel">
            <p class="tabel-heading">Data Orang Hilang</p>
            <a class="btn" href="<?=baseurl?>admin/upload">Tambah Orang</a>
            <br>
            <table class="tabel-konten">
                <thead style="background-color: #EBECED;">
                    <tr>
                        <th >Nama</th>
                        <th >Profil</th>
                        <th >Jenis Kelamin</th>
                        <th >Alamat</th>
                        <th >Hubungi</th>
                        <th >Status</th>
                        <th >Menu</th>
                    </tr>
                </thead>
                <tbody class="t-body">
                <?php foreach ($data['korban'] as $hilang): ?>
                    <?php $statusClass = ($hilang['status'] == 'hilang') ? 'status-hilang' : ''; ?>
                        <tr class="t-body">
                            <td><?= htmlspecialchars($hilang['nama']); ?></td>
                            <td>
                                <div class="pro-container">
                                    <img src="<?=htmlspecialchars($hilang['img_path']);?>" class="profile">
                                </div>
                            </td>
                            <td><?= htmlspecialchars($hilang['jk']); ?></td>
                            <td><?= htmlspecialchars($hilang['alamat']); ?></td>
                            <td><?= htmlspecialchars($hilang['hubungi']); ?></td>
                                <td class="<?php if($hilang['status'] == 'Hilang'){echo "status-hilang";} else{echo "ditemukan";}?>">
                                    <?= htmlspecialchars($hilang['status']); ?>
                                </td>
                            <td>
                                <a href="<?= baseurl ?>admin/edit/<?= $hilang['id_hilang']; ?>" class="btn-primary">Edit</a> |
                                <a href="<?= baseurl ?>admin/delete/<?= $hilang['id_hilang']; ?>" class="btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

