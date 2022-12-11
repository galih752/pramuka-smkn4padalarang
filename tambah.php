<html>
    <head>
        <title> Tambah Data </title>
        <link rel="stylesheet" href="style.css" >
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
        </div>
        <h1 style="text-align:center; color:white;">Tambah Data Anggota</h1>
        <div id="tambah">
            <form action="" method="post">
                <table style="margin-left:auto;margin-right:auto; color:ivory;">
            <tr>
                <td width="130">NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Sangga</td>
                <td><input type="text" name="sangga"></td>
            </tr>
            <tr>
                <td>Ambalan</td>
                <td><input type="text" name="ambalan"></td>
            </tr>
            <tr id="input" style="margin-top:10px;">
                <td></td>
                <td><input type="submit" value="Simpan" name="proses"></td>
            </tr>
            </table>
        </form>
        </div>

        <?php

        include "koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into anggota set
            nis = '$_POST[nis]',
            nama = '$_POST[nama]',
            kelas = '$_POST[kelas]',
            sangga = '$_POST[sangga]',
            ambalan ='$_POST[ambalan]'");

            echo "Data Baru Telah Tersimpan!";
            echo "<meta http-equiv=refresh content=2;URL='anggota.php'>";
        }

        ?>
    </body>
</html>