<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .tabel1 {
                text-align: center;
                font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid rgb(0, 150, 90);
            }
            
            .tabel1 tr th{
                text-align: center;
                background: rgb(1, 49, 21);
                color: #fff;
                font-weight: normal;
            }
            
            .tabel1, th, td {
                text-align: center;
                padding: 10px 20px;
                text-align: left;
                border: 0px solid rgb(1, 49, 21);;
                border-top: 0px;
            }
            .tabel1 tr:hover{
                background-color:rgb(10, 70, 35);
            }
            
            .tabel1 tr:nth-child(even) {
                text-align: center;
                
            }
            .tabel1 td{
                border-left: 2px solid rgb(1, 49, 21);
                border-right: 2px solid rgb(1, 49, 21);
            }
            .tabel1 tr:last-of-type{
                border-bottom:2px solid rgb(1, 49, 21);
            }
            .hapus{
            border: 1px solid #db5d59;
            background: #db5d59 url('images/hapus.png') no-repeat 5px 4px;
            height: 22px;
            padding-left: 15px;
            padding-top: 5px;
            }
            .hapus:hover{
                box-shadow: 4px 4px 6px black;
            }
            .edit{
            border: 1px solid #00b3a8;
            background: #00b3a8 url('images/edit.png') no-repeat 5px 4px;
            height: 22px;
            padding-left: 15px;
            padding-top: 5px;
            }
            .edit:hover{
            box-shadow: 4px 4px 6px black;
            }
            .kerjakan{
            background:url('images/upload.png');
            height: 22px;
            padding-left: 15px;
            padding-top: 5px;
            }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Harian</title>
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
        <h1 style="font-family:comic sans ms; text-align : center; color:white;">TUGAS HARIAN</h1>
        <br>
<div>
    <table style="color:white;"class="tabel1">
        <tr style="color:white;">
            <th>No</th>
            <th>Materi</th>
            <th>Tugas</th>
            <th>Tanggal Tugas</th>
            <th colspan="2">Action</th>
        </tr>
<?php
include "koneksi.php";
$no=1;
$sql = mysqli_query($koneksi, "SELECT * FROM tugas");
while ($tampil = mysqli_fetch_array($sql)){
    echo "
    <tr>
        <td style='text-align:center;'>$tampil[id]</td>
        <td style='text-align:center;'>$tampil[subject]</td>
        <td style='text-align:center;'><a href='file.php?id=$tampil[id]' ><img src='images/view.png' width='40px' height='35px'></a></td>
        <td style='text-align:center;'>$tampil[tanggal_tugas]</td>
        <td style='text-align:center;'><a href='pengumpulan.php' class='kerjakan'><img src='images/upload.png' width='60px' height='55px'></a></td>
        <td style='text-align:center;'><a href='?id=$tampil[id]' style='color:white; text-decoration:none;'> <input type='button' class='hapus' ></a></td>
    </tr>
    ";
}
$no++;
?>
    </table>
    <center><button style="margin-top:10px;box-shadow: 4px 4px 6px #333;background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px;"><a href="tambah-tugas.php" style="color:white; text-decoration:none;">Upload Tugas</a></button></center>
    <center><button style="margin-top:10px;box-shadow: 4px 4px 6px #333;background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px;"><a href="rekap.php" style="color:white; text-decoration:none;">Cek Pengumpulan</a></button></center>
</div>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
    </body>
</html>
<?php
if(isset($_GET['id'])){
    mysqli_query($koneksi, "delete from tugas where id='$_GET[id]'");


    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='tugas.php'>";
}
?>