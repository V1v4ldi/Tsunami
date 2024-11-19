<style>
      body{
        background-image: url("https://wallpaperaccess.com/full/1850865.jpg") ;
        background-repeat: no-repeat;
        background-size:cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
      }
      .card {
        background-color: rgb(245, 247, 249);
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        width: 30rem;
        padding: 20px;
      }

    </style>
    
    <div class="card text-center">
        <form action="<?= baseurl?>Home/logincek" method="POST">
          <div class="card-body">
            <h2 class="card-title">LOGIN</h2>
            <p class="card-text">Masukkan Email dan Password Anda</p>
            <br>
            <div class="mb-3 row">
              <div class="col">
                <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email" required>
              </div>
            </div>
            <div class="mb-3 row">
              <div class="col">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
              </div>
            </div>
          </form>
          <div class="mb-3 row">
            <div class="col">
              <button type="submit" class="btn btn-outline-primary">MASUK</button>
            
        </div>
        </div>
      </div> 