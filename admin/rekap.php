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
        </style>
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
        <h1 style="font-family:comic sans ms; text-align : center; color:white;">DATA PENGUMPULAN TUGAS</h1>
        <form action="" method="POST" align="center">
            <input type="text" name="query" placeholder="Masukkan Kata Kunci.."  style=" box-shadow: 4px 4px 6px #333; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:5px; width: 300px; height:28px;" />
            <input type="submit" name="cari" value="Search"  style=" box-shadow: 4px 4px 6px #333; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 80px; height:28px; color:white;"/>
        </form>
        <br>
        <div id="data">
        <table class="tabel1" style="color:white;" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Materi</th>
                <th>Pengumpulan</th>
                <th>Tanggal Pengumpulan</th>
                <th colspan="2">Action</th>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = $_POST['query'];

        if($query !=''){
            $ambil = mysqli_query($koneksi, "select * from rekap where
            id like '%".$query."%' or
            nama_siswa like '%".$query."%' or
            subject like '%".$query."%' or
            file_tugas like '%".$query."%' or
            tanggal_pengumpulan like '%".$query."%'");


        }else{
            $ambil = mysqli_query($koneksi, "SELECT pengumpulan.id_pengumpulan, pengumpulan.nama_siswa, tugas.subject, pengumpulan.file_tugas, pengumpulan.tanggal_pengumpulan FROM `pengumpulan` LEFT JOIN tugas ON tugas.id=pengumpulan.id");
        }
        if(mysqli_num_rows($ambil)){
        while ($tampil = mysqli_fetch_array($ambil)){
            echo "
            <tr>
                <td style='text-align:center;'>$no</td>
                <td style='text-align:center;'>$tampil[nama_siswa]</td>
                <td style='text-align:center;'>$tampil[subject]</td>
                <td style='text-align:center;'><a href='../pengumpulan/$tampil[file_tugas]' style='color:white;text-decoration:none;'>$tampil[file_tugas]</a></td>
                <td style='text-align:center;'>$tampil[tanggal_pengumpulan]</td>
                <td style='text-align:center;'><a href='?id=$tampil[id_pengumpulan]' style='color:white; text-decoration:none;'> <input type='button' class='hapus'></a></td>
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
        <td><center><input type="submit" value="EXPORT EXCEL" onclick="window.open('rekap-excel.php')" style=" background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></center></td>
        <td></td>
        <td></td>
    </tr>
        </table>
    </div>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
    </body>
    
<?php
include "koneksi.php";
if(isset($_GET['id'])){
    mysqli_query($koneksi, "delete from pengumpulan where 
    id_pengumpulan ='$_GET[id]'");

    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='rekap.php'>";
}
?>
</html>