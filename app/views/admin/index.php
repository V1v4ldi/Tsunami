<?php require_once '../app/config/cekadmin.php';?>
<?php $_SESSION['alamat'] = baseurl.'/admin'; ?>
        <style>
        .card {
            margin-top: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
        }
        .table-container {
            margin-top: 20px;
            display: none;
        }
    </style>
    <div class="container col-sm-6">
        <div class="row">
            <div class="header"><h1>DASHBOARD ADMIN</h1></div>
            <br>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">DATA SISWA</h5><br>
                        <div class="mb-6 row text-center">
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-primary" id="button-1">Lihat</button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">DATA GURU</h5><br>
                        <div class="mb-6 row text-center">
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-primary" id="button-2">Lihat</button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row table-container" id="table-siswa">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tabel Data Siswa</h5>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['siswa'] as $siswa): ?>
            <tr>
                <td style="text-align: center;"><?= $siswa['nama'] ?></td>
                <td style="text-align: center;"><?= $siswa['jurusan'] ?></td>
                <td style="text-align: center;"><?= $siswa['nama_kelas'] ?></td>
                <td style="text-align: center;"><?= $siswa['nisn'] ?></td>
                <td><a href="<?= baseurl?>siswa/hapussiswa/<?=$siswa['id']?>">Hapus</a></td>
            </tr>
    <?php endforeach ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row table-container" id="table-guru">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tabel Data Guru</h5>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th scope="col">NUPTK</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['guru'] as $guru) : ?>
        <tr>
            <td style="text-align: center;"><?= $guru['nama'] ?></td>
            <td style="text-align: center;"><?= $guru['pelajaran'] ?></td>
            <td style="text-align: center;"><?= $guru['nuptk'] ?></td>
            <td><a href="<?= baseurl ?>guru/hapusguru/<?=$guru['id']?>">Hapus</a></td>
        </tr>
    <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('button-1').addEventListener('click', function () {
            document.getElementById('table-siswa').style.display = 'block';
            document.getElementById('table-guru').style.display = 'none';
        });

        document.getElementById('button-2').addEventListener('click', function () {
            document.getElementById('table-guru').style.display = 'block';
            document.getElementById('table-siswa').style.display = 'none';
        });
    </script>