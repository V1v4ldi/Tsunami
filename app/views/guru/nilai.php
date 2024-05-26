<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    
    * {
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    nav {
        height: 80px;
        background: rgb(113, 164, 250); 
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 50px 0 100px;
        width: 100%;
    }

    nav .logo {
        color: #fff;
        font-size: 30px;
        font-weight: bold;
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: 1px;
        padding: 8px 15px;
        border-radius: 10px;
    }

    nav ul li a:hover {
        color: rgb(10, 10, 239);
        background: #fff;
    }

    nav ul li {
        margin: 0 20px;
    }

    .header {
        text-align: center;
        margin-top: 20px;
    }

    .header h1 {
        font-weight: bold;
        font-size: 36px;
    }

    .card {
        margin-top: 20px;
        border-radius: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 1200px;
    }

    .card-title {
        font-weight: bold;
        font-size: 30px;
        text-align: center;
    }

    .card-text {
        font-size: 18px;
    }

    .btn-primary {
        background-color: rgb(10, 10, 239);
        border: none;
    }

    .btn-primary:hover {
        background-color: #0000FF;
    }
    nav ul li a:hover{
  color: rgb(10, 10, 239);
  background: #fff;
}
nav ul li{
  margin: 0 44px;
}

</style>


<div class="header">
        <h1>NILAI SISWA</h1>
    </div>

    <div class="container">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5><br>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Edit Nilai</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bahasa Indonesia</td>
                                    <td>12</td>
                                    <td></td>
                                    <td><a href="#">Edit Nilai</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>