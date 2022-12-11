<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
    <script>
    alert("Selamat anda masuk sebagai Admin..")
</script>
        <title>Pramuka SMKN 4 Padalarang</title>
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
    <div class="container">
        <label style="font-size:13pt;">Pramuka SMKN 4 Padalarang</label>

        <div class="sidebar" style="font-size:12pt;">
        <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Course</a>
                        <ul class="dropdown">
                            <li><a href="tugas.php">Tugas</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pusat Informasi</a>
                        <ul class="dropdown">
                            <li><a href="photo.php">Photo</a></li>
                            <li><a href="administrasi.php">Dokumen</a></li>
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
                    <li>
                        <a href="logout.php">Logout</a>
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
        <p style="margin-top:500px; text-align:center;"><b>Creat by Pramuka Nepal</b></p>
        <p align="center" style="margin-top:1px;">&copy; 2022 </p>
    </footer>
    </body>
</html>