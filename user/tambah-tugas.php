<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    </style>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim File</title>
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
    <h3 style="font-family:comic sans ms;color:white; text-align:center;">TAMBAH TUGAS</h3>
    <fieldset style="width : 440px; display: block; margin:auto; margin-top:20px; border-radius: 5px; box-shadow: 4px 4px 6px black;">
    <center><table>
    <form action="" method="POST" enctype="multipart/form-data">
        <tr>
            <td style="color:white;">Materi</td>
            <td align="center" style="color:white;">:</td>
            <td><input type="text" name="subject" style="background-color:rgb(4, 87, 38); border:1px solid white; border-radius:5px; width: 150px; height:20px; color:white;"></td>
        </tr>
        <tr>
            <td style="color:white;">File</td>
            <td align="center" style="color:white;">:</td>
            <td><input type="file" name="file" style="border: 1px solid #ffff; width:181px;color:white; height:21px;border-radius:5px;"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Upload" style="margin-top: 20px; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></td>
        </tr>
    </form>
    
</table></center>
</fieldset>
</body>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    $directory = "../tgs/";
    $file_name = $_FILES['file']['name'];
    $tanggal = date("Y-m-d H:i:s");
    move_uploaded_file($_FILES['file']['tmp_name'],$directory.$file_name);

    mysqli_query($koneksi, "insert into tugas set 
    tugas='$file_name', 
    tanggal_tugas='$tanggal',
    subject='$_POST[subject]'");

    echo "TUGAS TERKIRIM!!";
    echo "<meta http-equiv=refresh content=1;URL='tugas.php'>";
    }
?>
</html>