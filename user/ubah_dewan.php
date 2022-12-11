<?php
include "koneksi.php";

$sql=mysqli_query($koneksi,"select * from dewan_ambalan where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}
?>

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
        <h1 style="text-align:center; color:white;">Update Data Anggota</h1>
        <div id="tambah">
            <form action="" method="post">
                <table style="margin-left:auto;margin-right:auto; color:ivory;">
            <tr>
                <td width="130">ID</td>
                <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $data['kelas'];?>"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>"></td>
            </tr>
            <tr id="input" style="margin-top:10px;">
                <td></td>
                <td><input type="submit" value="Simpan" name="proses" style="margin-top: 20px; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></td>
            </tr>
            </table>
        </form>
        </div>
        <?php
        include "koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"update dewan_ambalan set
            nama = '$_POST[nama]',
            kelas = '$_POST[kelas]',
            jabatan = '$_POST[jabatan]'
            where id = '$_GET[id]'");

            echo "Data Baru Telah Disimpan!!";
            echo "<meta http-equiv=refresh content=2;URL='dewan.php'>";
        }

        ?>
</body>
</html>