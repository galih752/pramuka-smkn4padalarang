<!DOCTYPE html>
<html>
    <head>
        <title>Pramuka SMKN 4 Padalarang</title>
        <link rel="stylesheet" href="style.css" >
        <link rel="shortcut icon" href="image/logo.png"> 
        <style>
            body{
    background: rgb(4, 87, 38);
    background-size: 100% 100vh;
    margin: 0;
    background-attachment: fixed;
    background-repeat: no-repeat;
    
}
.sidebar{
    font-family: tahoma;
    font-weight: bold;
    height: 50px;
    width: 100%;
    background: rgb(4, 87, 38);
    border-radius: 5px;
    font-size: 18px;
}
label{
    font-family: comic sans ms;
    font-size: 20pt;
    color: white;
    margin: 10px;
    padding: 5px;
    float: left;
}
.sidebar ul{
    margin: 0px;
    padding: 5px;
    background: none;
    display: block;
    float: right;
}
.sidebar ul li{
    list-style: none;
    display: inline-block;

}
.sidebar ul li a{
    display: block;
    text-decoration: none;
    padding: 20px;
    color: #ddd;
}
.sidebar ul li a:hover {
    display: block;
    color: rgb(4, 87, 38);
    background: rgb(0, 255, 115);
    box-shadow: inset 0px 0px 5px #000;
}
.sidebar ul li .dropdown {
    display: none;
}
.sidebar ul li:hover .dropdown{
    display: block;
    background: rgb(4, 87, 38);
    position: absolute;
    padding: 10px;
}
.sidebar ul li:hover .dropdown li{
    display: block;

}
.beranda{
    font-size: 20px;
    font-family: comic sans ms;
    text-align: center;
    color: rgb(255, 255, 255);
}
#dhl fieldset{
    margin: auto;
    border-color: #000;
    box-shadow: 4px 4px 6px #333;
    width: 55%;
}
#isi fieldset{
    margin: auto;
    width: 50%;
    box-shadow: 3px 3px 5px #333;
    border-color: #000;
}
.lambang{
    margin: auto;
    padding: 30px;
}
.foto fieldset{
    margin: auto;
    width: 50%;
    box-shadow: 3px 3px 5px #333;
    border-color: #000;
}
.main{
    width: 1200px;
    height: 100%;
    margin: auto;
}
.image{
    border: solid;
    height: 360px;
    width: 100%;
    border-radius: 50px;
    display: flex;
}
.dok{
    width: 300px;
    height: 300px;
    border-radius: 50px;
    margin-top: 30px;
    margin-left: 30px;
    margin-bottom: 30px;
}
.ilman{
    width: 300px;
    height: 300px;
    border-radius: 50px;
    margin-top: 30px;
    margin-left: 30px;
    margin-bottom: 30px;
    margin-right: 30px;
}
.ilman img{
    width: 100%;
    height: 100%;
    border-radius: 50px;
}
.dok img{
    width: 100%;
    height: 100%;
    border-radius: 50px;
}
.file{
    margin: auto;
    width: 788px;
    height: 185px;
    border: solid;
    background-color: greenyellow;
    margin-top: 10px;
    box-shadow: 3px 3px 3px black;
    text-decoration: none;
}
.file .isi_file{
    text-decoration: none;
    text-align: center;
}
.isi_file a{
    text-decoration: none;
    color: #000;
}
.isi_file a:hover{
    text-decoration: none;
    color: blue;
}
.coming{
    text-align: center;
    color: white;
    font-family: comic sans ms;
    font-size: auto;
    margin-top: 250px;
    margin-bottom: 250px;
}
.hapus{
    border: 1px solid #db5d59;
    background: #db5d59 url('images/hapus.png') no-repeat 5px 4px;
    height: 22px;
    padding-left: 15px;
    padding-top: 5px;
    }
.edit{
    border: 1px solid #00b3a8;
    background: #00b3a8 url('images/edit.png') no-repeat 5px 4px;
    height: 22px;
    padding-left: 15px;
    padding-top: 5px;
}
.copyright{
    text-align: center;
    width: 100%;
    padding: 50px 0px 50px 0px;
    margin-top: 50px;
}
#judul{
    text-align: center;
    color: #ddd;
}
        </style>
    </head>
    <body>
    <div class="container">
        <label style="font-size:13pt;">Pramuka SMKN 4 Padalarang</label>
        <div class="sidebar" style="font-size:12pt;">
        <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Pusat Informasi</a>
                        <ul class="dropdown">
                            <li><a href="photo.php">Photo</a></li>
                            <li><a href="otista.php">Kiasan Logo Otto Iskandardinata</a></li>
                            <li><a href="inggit.php">Kiasan Logo Inggit Ganarsih</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Kontak</a>
                        <ul class="dropdown">
                            <li><a href="https://www.instagram.com/pramukanepal_/" target="_blank">Instagram</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Profile</a>
                        <ul class="dropdown">
                            <li><a href="anggota.php">Anggota</a></li>
                            <li><a href="dewan.php">Dewan Ambalan</a></li>
                            <li><a href="sejarah.php">Sejarah Ambalan</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="beranda" >
            <h1>AMBALAN</h1>
            <h2>Otto Iskandar Dinata - Inggit Garnasih</h2>
        </div>
        <div class="logo" align="center" style="display: block; margin: auto;" alt="Logo Mabalan">
            <img src="putra.png" width="200" height="210" >
            <img src="putri.png" width="210" height="230" >
        </div>
            <div id="dhl">
                <fieldset >
                    <legend>TRI SATYA</legend>
                    <h3 class="tri.satya">Demi kehormatanku aku berjanji akan bersungguh - sungguh: <br>
                        - Menjalankan kewajibanku terhadap Tuhan, Negara Kesatuan Republik Indonesia dan Mengamalkan Pancasila <br>
                        - Menolong Sesama Hidup dan Ikut serta membangun masyarakat <br>
                        - Menepati Dasa Darma
                    </h3>
                </fieldset>
                <h3><br></h3>
                <fieldset>
                    <legend>DASA DARMA</legend>
                    <h3 class="dasa.darma" >
                        Pramuka Itu:<br>
                        1. Taqwa Kepada Tuhan Yang Maha Esa<br>
                        2. Cinta alam dan kasih sayang sesama manusia<br>
                        3. Patriot yang sopan dan kesatria<br>
                        4. Patuh dan suka bermusyawarah<br>
                        5. Rela Menolong dan Tabah<br>
                        6. Rajin, terampil, dan gembira<br>
                        7. Hemat, Cermat dan Bersahaja<br>
                        8. Disiplin, Berani, dan Setia<br>
                        9. Bertanggung Jawab dan Dapat Dipercaya<br>
                        10. Suci dalam pikiran, Perkataan dan Perbuatan
                    </h3>
                </fieldset>
        </div>
    </div>
    <footer>
        <p style="text-align:center;"><b>Creat by Pramuka Nepal</b></p>
        <p align="center" style="margin-top:1px;">&copy; 2022 </p>
    </footer>
    </body>
</html>