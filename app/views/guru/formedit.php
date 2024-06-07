<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"] {
                -moz-appearance: textfield;
            }
            
        </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
    <form action="<?=baseurl. 'Guru/editnilai'?>" method="post">
<div class="row table-container" id="table-siswa">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Tabel Data Siswa</h2>
                        <br>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Tugas 1</th>
                                    <th scope="col">Tugas 2</th>
                                    <th scope="col">Tugas 3</th>
                                    <th scope="col">Tugas 4</th>
                                    <th scope="col">Tugas 5</th>
                                    <th scope="col">UTS</th>
                                    <th scope="col">UAS</th>
                                    <th scope="col">Submit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <input type="hidden" name="idmapel" value="<?= $data['idmapel'] ?>">
    <input type="hidden" name="idmurid" value="<?= $data['idmurid'] ?>">
        <td><input type="number" name="tugas1" max="100"></td>
        <td><input type="number" name="tugas2" max="100"></td>
        <td><input type="number" name="tugas3" max="100"></td>
        <td><input type="number" name="tugas4" max="100"></td>
        <td><input type="number" name="tugas5" max="100"></td>
        <td><input type="number" name="uts" max="100"></td>
        <td><input type="number" name="uas" max="100"></td>
        <td><button type="submit">Submit</button></td>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</form>
</body>
</html>
