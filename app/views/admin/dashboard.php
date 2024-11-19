<main>
    <section>
        <h1 class="judul"><?=$data['admin']['nama']?></h1>
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
            <a class="btn" href="<?=baseurl?>home/upload">Tambah Orang</a>
            <a class="btn" href="<?=baseurl?>admin/lokasi">Tambah Lokasi</a>
            <br>
            <table class="tabel-konten">
                <thead style="background-color: #EBECED;">
                    <tr>
                        <th >Profil</th>
                        <th >Nama</th>
                        <th >Jenis Kelamin</th>
                        <th >Alamat</th>
                        <th >Hubungi</th>
                        <th >Lokasi Hilang</th>
                        <th >Status</th>
                        <th >Menu</th>
                    </tr>
                </thead>
                <tbody class="t-body">
                <?php foreach ($data['korban'] as $hilang): ?>
                    <?php $statusClass = ($hilang['status'] == 'hilang') ? 'status-hilang' : ''; ?>
                        <tr class="t-body">
                            <td>
                                <div class="pro-container">
                                    <img src="<?=imgkrb.$hilang['img_path'];?>" class="profile">
                                </div>
                            </td>
                            <td><?= $hilang['nama']; ?></td>
                            <td><?= $hilang['jk']; ?></td>
                            <td><?= $hilang['alamat']; ?></td>
                            <td><?= $hilang['hubungi']; ?></td>
                            <td><?= $hilang['lok-hilang']; ?></td>
                                <td class="<?php if($hilang['status'] == 'Hilang'){echo "status-hilang";} elseif($hilang['status'] == 'Ditemukan'){echo "status-ditemukan";}?>">
                                    <?= $hilang['status']; ?>
                                </td>
                            <td>
                                <a href="#" class="btn-primary edit-btn" data-id="<?= $hilang['id_hilang']; ?>" 
                                data-nama="<?=$hilang['nama']; ?>" 
                                data-alamat="<?= $hilang['alamat']; ?>" 
                                data-jk="<?= $hilang['jk']; ?>" 
                                data-hubungi="<?= $hilang['hubungi']; ?>" 
                                data-lok-hilang="<?=$hilang['lok-hilang']?>">Edit</a> |
                                <a href="<?= baseurl ?>admin/hapus/<?= $hilang['id_hilang']; ?>" class="btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <div class="popup" style="display: none;">
        <div class="wrapper">
            <form id="edit-form" action="<?= baseurl ?>admin/update/" method="POST">
                <h1>Form Edit Korban</h1>
                <input type="hidden" name="id_hilang" id="edit-id">
                <div class="input-box">
                    <input type="text" name="nama" id="edit-nama" placeholder="Nama Lengkap" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input type="text" name="alamat" id="edit-alamat" placeholder="Alamat" required>
                    <i class='bx bxs-home'></i>
                </div>
                <div class="input-box">
                    <select name="jk" id="edit-jk" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <i class='bx bx-male-sign'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="hubungi" id="edit-hubungi" placeholder="Nomor Telepon" required>
                    <i class='bx bxs-phone' ></i>
                </div>
                <div class="input-box">
                    <input type="text" name="lok-hilang" id="edit-lok-hilang" placeholder="Lokasi Hilang" required>
                    <i class='bx bxs-map' ></i>
                </div>
                <div class="input-box">
                    <select name="status" id="edit-status" required>
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Hilang">Hilang</option>
                        <option value="Ditemukan">Ditemukan</option>
                    </select>
                    <i class="bi bi-question-lg"></i>
                </div>
                <div class="input-box">
                    <button class="btn-for-edit" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>

