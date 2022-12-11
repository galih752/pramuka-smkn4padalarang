<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}

include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
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
        <fieldset style="width : 550px; display: block; margin:auto; margin-top:20px; border-radius: 5px; box-shadow: 4px 4px 6px black;">
            <?php
            $sql=mysqli_query($koneksi , "SELECT * FROM tugas WHERE id=$_GET[id]");
            while ($tampil = mysqli_fetch_array($sql)){
                echo "
                <h3 style='color:white;text-align:center;'>$tampil[subject]</h3>
                <h3 style='color:white;'>$tampil[soal]</h3>
                <h3 style='color:white;text-align:center;border: 1px solid;box-shadow: 4px 4px 6px black;'><a href='../tgs/$tampil[tugas]' style='color:white; text-align:center; text-decoration:none;' >$tampil[tugas]</a></h3>
                ";
            }
            ?>
        </fieldset>
            
            <footer>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
            </footer>
    </body>
</html>