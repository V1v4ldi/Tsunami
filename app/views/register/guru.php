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
          <h1 class="card-title">REGISTER GURU</h1>
          <p class="card-text">Masukkan data dengan benar!</p>
          <br>

    <form class="row g-3" action="<?=baseurl?>Register/tambahguru" method="post">
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="passw">
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control"  placeholder="Nama" name="nama" >
          </div>
         
        <div class="col-md-6">
          <label for="nuptk" class="form-label">NUPTK</label>
          <input type="number" class="form-control" placeholder="NUPTK" name="nuptk">
        </div>

        <div class="col-md-6">
          <label for="inputMapel" class="form-label">Mata Pelajaran</label>
          <select id="inputMapel" class="form-select" name="pelajaran">
            <option selected>Pilih Mata Pelajaran</option>
            <option value="1">Pendidikan Agama</option>
            <option value="2">Pendidikan Kewarganegaraan</option>
            <option value="3">Bahasa Indonesia</option>
            <option value="4">Matematika (Wajib)</option>
            <option value="5">Bahasa Inggris</option>
            <option value="6">Seni Dan Prakarya</option>
            <option value="7">Pendidikan Jasmani</option>
            <option value="8">Fisika</option>
            <option value="9">Kimia</option>
            <option value="10">Matematika (Minat)</option>
            <option value="11">Biologi</option>
            <option value="12">Sosiologi</option>
            <option value="13">Geografi</option>
            <option value="14">Ekonomi</option>
            <option value="15">Sejarah</option> 
          </select>
        </div>
        
        <br>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-outline-primary" onclick="window.location.href = '<?= baseurl?>home/login'">Register</button>
        </div>
      </form>