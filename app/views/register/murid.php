<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  body{
   background-image: url("https://wallpaperaccess.com/full/1850865.jpg");  
   background-repeat: no-repeat;
   background-size:cover; 
  }
  .card{
      margin: 50px 300px;
      padding: 50px;
      border-radius: 15px;
  }
</style>
<body>
  <div class="card text-center">
    <div class="card-body">
          <h1 class="card-title">REGISTER MURID</h1>
          <p class="card-text">Masukkan data dengan benar!</p>
          <br>
    <form action="<?= baseurl?>Register/tambahmurid" class="row g-3" method="POST">
      <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" placeholder="email" name="email">
    </div>
    <div class="col-md-6">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" placeholder="password" name="passw">
    </div>
    <div class="col-md-6">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control"  placeholder="Nama" name="nama" >
      </div>
     
    <div class="col-md-6">
      <label for="nisn" class="form-label">NISN</label>
      <input type="int" class="form-control" placeholder="NISN" name="nisn">
    </div>
        
        <div class="col-md-6">
          <label for="inputJurusan" class="form-label">Jurusan</label>
          <select id="inputJurusan" class="form-select" name="jurusan">
            <option selected>Pilih Jurusan</option>
            <option value="1">IPA</option>
            <option value="2">IPS</option>
          </select>
        </div>
        
        <div class="col-md-6">
          <label for="inputKelas" class="form-label">Kelas</label>
          <select id="inputKelas" class="form-select" name="kelas">

          </select>
        </div>
        <br>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-primary" onclick="window.location.href = '<?= baseurl?>home/login'">Register</button>
        </div>
      </form>

      <script>
    document.getElementById('inputJurusan').addEventListener('change', function() {
    var kelasDropdown = document.getElementById('inputKelas');
    var selectedJurusan = this.value;

    // Reset dropdown Kelas
    kelasDropdown.innerHTML = '<option selected>Pilih Kelas</option>';

    if (selectedJurusan == '1') { // Jika IPA dipilih
        var options = [
            '<option value="1">X-IPA-1</option>',
            '<option value="2">X-IPA-2</option>',
            '<option value="3">X-IPA-3</option>',
            '<option value="4">XI-IPA-1</option>',
            '<option value="5">XI-IPA-2</option>',
            '<option value="6">XI-IPA-3</option>',
            '<option value="7">XII-IPA-1</option>',
            '<option value="8">XII-IPA-2</option>',
            '<option value="9">XII-IPA-3</option>'
        ];
        kelasDropdown.innerHTML = options.join('');
    } else if (selectedJurusan == '2') { // Jika IPS dipilih
        var options = [
            '<option value="10">X-IPS-1</option>',
            '<option value="11">X-IPS-2</option>',
            '<option value="12">X-IPS-3</option>',
            '<option value="13">XI-IPS-1</option>',
            '<option value="14">XI-IPS-2</option>',
            '<option value="15">XI-IPS-3</option>',
            '<option value="16">XII-IPS-1</option>',
            '<option value="17">XII-IPS-2</option>',
            '<option value="18">XII-IPS-3</option>'
        ];
        kelasDropdown.innerHTML = options.join('');
    }
});
</script>