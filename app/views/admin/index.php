<h1>Selamat Datang, <?= $data['admin']['nama'];  ?></h1>
<table>
    <tr>
        <td style="text-align: center;">Nama</td>
        <td style="text-align: center;">Mapel Yang Diampu</td>
        <td style="text-align: center;">NUPTK</td>
        <td style="text-align: center;">OPSI</td>
    </tr>
    <?php foreach($data['guru'] as $guru) : ?>
        <tr>
            <td style="text-align: center;"><?= $guru['nama'] ?></td>
            <td style="text-align: center;"><?= $guru['pelajaran'] ?></td>
            <td style="text-align: center;"><?= $guru['nuptk'] ?></td>
            <td><a href="">Hapus</a></td>
        </tr>
    <?php endforeach ?>
    </table>

    <table>
        <tr>
            <td style="text-align: center;">Nama</td>
            <td style="text-align: center;">Jurusan</td>
            <td style="text-align: center;">Kelas</td>
            <td style="text-align: center;">NISN</td>
            <td style="text-align: center;">OPSI</td>
        </tr>
    <?php foreach($data['siswa'] as $siswa): ?>
            <tr>
                <td style="text-align: center;"><?= $siswa['nama'] ?></td>
                <td style="text-align: center;"><?= $siswa['jurusan'] ?></td>
                <td style="text-align: center;"><?= $siswa['nama_kelas'] ?></td>
                <td style="text-align: center;"><?= $siswa['nisn'] ?></td>
                <td><a href="">Hapus</a></td>
            </tr>
    <?php endforeach ?>
        </table>