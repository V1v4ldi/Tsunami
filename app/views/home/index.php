    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
       
   body {
   background-image: url("https://wallpaperaccess.com/full/1850865.jpg");
   background-repeat: no-repeat;
   background-size:cover;
   height: 100vh;
   display: flex;
   justify-content: center;
   align-items: center;
   text-align: center;
   color: white; 
   padding: 0, 100px ;
}
.content {
font-weight: bold;
font-family: 'Roboto', sans-serif;
padding: 10px 10px 80px; 
 }
.display-1 {
text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
font-size: 10em;
color: #FFD700; 
        }
.btn-info{
    margin-top: 10px;
    padding: 10px 5px;
    font-size: 1.5em ;
    color:aliceblue;
    width: 300px;
    background-color: rgb(235, 239, 250);
}
.btn-info:hover {
        background-color: hsl(209, 85%, 75%);
}
.btn-info a {
        text-decoration: none;
       
    }
    </style>
<div class="content">
        <div class="display-1">SMA VETERAN</div>
        <br>  
        
    <button type="button" class="btn btn-info" onclick="window.location.href = '<?= baseurl?>home/login'">
        <a href="<?= baseurl?>home/login">LOGIN </a>
    </button> 
    <button type="button" class="btn btn-info" onclick="window.location.href = '<?= baseurl?>register/guru'">
        <a href="<?= baseurl ?>register/guru">REGISTER GURU </a>
    </button> 
    <button type="button" class="btn btn-info" onclick="window.location.href = '<?= baseurl?>register/murid'">
        <a href="<?= baseurl ?>register/murid">REGISTER MURID </a>
    </button>
   
</div>     
</div>     
