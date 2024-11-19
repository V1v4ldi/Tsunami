<div class="container">
        <h1>Daftar Orang Hilang dan Ditemukan</h1>
        <table>
                <thead>
                    <tr>
                        <th >Profil</th>
                        <th >Nama</th>
                        <th >Jenis Kelamin</th>
                        <th >Alamat</th>
                        <th >Hubungi</th>
                        <th >Lokasi Hilang</th>
                        <th >Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data['korban'] as $hilang): ?>
                    <?php $statusClass = ($hilang['status'] == 'hilang') ? 'status-hilang' : ''; ?>
                        <tr>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
<!-- Help Section -->
<!-- Help Section -->
<div class="help-section">
    <h2>Ada yang Bisa Kami Bantu?</h2>
    <p>Laporkan korban yang hilang atau ditemukan di bawah ini:</p>
    <img src="<?=baseurl?>img/REMOVE.svg" alt="Logo Help" style="width: 200px; height: 200px; margin-bottom: 20px;">

</div>  
        <a href="<?=baseurl?>home/upload" class="btn">Laporkan Orang Hilang</a>
    </div>