<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehadiran</title>
</head>
<body>
<?php
error_reporting(0);

session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dewan Ambalan</title>
        <link rel="stylesheet" href="style.css">
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
                            <li><a href="kehadiran.php">Kehadiran</a></li>
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
        <h1 style="font-family:comic sans ms; text-align : center; color:white;">DATA KEHADIRAN</h1>
        <br>
        <div id="data">
        <table style="border-color: white;margin-bottom : 10px; margin-left:auto;margin-right:auto; color:ivory; box-shadow: 4px 4px 6px #333; width:650; height:100;" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Kehadiran</th>
                <th>Action</th>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = $_POST['query'];
        $ambil = mysqli_query($koneksi, "SELECT anggota.id, anggota.nama, absen.tanggal_absen, absen.kehadiran FROM absen INNER JOIN anggota ON anggota.id=absen.id");
        if(mysqli_num_rows($ambil)){
        while ($tampil = mysqli_fetch_array($ambil)){
            echo "
            <tr>
                <td>$tampil[id]</td>
                <td>$tampil[nama]</td>
                <td>$tampil[tanggal_absen]</td>
                <td>$tampil[kehadiran]</td>
                <td><a href='absen.php' style='color:white; text-decoration:none;'>Presensi</a></td>
            </tr>";

            $no++;
        }
    }else{
        echo "<tr><td colspan='7' align='center'>NO DATA</td></tr>";
    }


    ?>
    </table>
    <table id="kirim" style="margin-bottom : 10px; margin-left:auto;margin-right:auto; color:ivory;">
    <tr>
        <td><center><input type="submit" value="EXPORT EXCEL" onclick="window.open('dewan-excel.php')" style=" background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></center></td>
        <td></td>
        <td></td>
    </tr>
        </table>
    </div>
    </body>
<?php
if(isset($_GET['id'])){
    mysqli_query($koneksi, "delete from absen where id_dewan='$_GET[id]'");

    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='dewan.php'>";
}
?>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
    </body>
</html>
</body>
</html>