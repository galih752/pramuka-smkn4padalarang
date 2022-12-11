<?php

include "koneksi.php";

$sql=mysqli_query($koneksi,"select * from anggota where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
$sql1=mysqli_query($koneksi,"select * from user where id='$_GET[id]'");
$data1=mysqli_fetch_array($sql1);
$sql2=mysqli_query($koneksi,"select * from anggota_pramuka where id='$_GET[id]'");
$data2=mysqli_fetch_array($sql2);
$sql3=mysqli_query($koneksi,"select * from dewan where id='$_GET[id]'");
$data3=mysqli_fetch_array($sql3);
session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}

?>
<?php 
include "koneksi.php";
?>

<html>
    <head>
        <title> Daftar Akun </title>
        <link rel="stylesheet" href="style.css" >
        <style>
            input{
                margin-top: 20px; 
                background-color:rgb(4, 87, 38); 
                border:2px solid white; 
                border-radius:10px; 
                width: 150px; 
                height:28px; 
                color:white;"
            }
            select{
                text-align: center;
                margin-top: 20px; 
                background-color:rgb(4, 87, 38); 
                border:2px solid white; 
                border-radius:10px; 
                width: 150px; 
                height:28px; 
                color:white;"
            }
            option{
                text-align: center;
                margin-top: 20px; 
                background-color:rgb(4, 87, 38); 
                border:2px solid white; 
                border-radius:10px; 
                width: 150px; 
                height:28px; 
                color:white;"
            }
            form tr td{
                text-align:center;
            }
            form tr .soal{
                text-align:left;
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
        </div>
        <h1 style="text-align:center; color:white;">Ubah Data Anggoa</h1>
        <div id="tambah">
        <fieldset style="width : 450px; display: block; margin:auto; margin-top:20px; border-radius: 5px; box-shadow: 4px 4px 6px black;">
            <form action="" method="post">
                <table style="margin-left:auto;margin-right:auto; color:ivory;">
            <tr>
                <td class="soal">Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
            </tr>
            <tr>
                <td class="soal">Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $data1['username'];?>"></td>
            </tr>
            <tr>
                <td class="soal">Sangga</td>
                <td>:</td>
                <td><select name="sangga" id="sangga">
                    <option><?php echo $data2['sangga'];?></option>
                <?php
                $sql = $koneksi->query("SELECT * FROM list_sangga");
                while($data = $sql->fetch_assoc()){?>
                    <option value="<?php echo $data['id_sangga'];?>"><?php echo $data['sangga'];?></option>
                <?php } ?>
            </select></td>
            </tr>
            <tr>
                <td class="soal">Kelas</td>
                <td>:</td>
                <td><select name="kelas" id="kelas">
                <option><?php echo $data2['kelas'];?></option>
                <?php
                $sql = $koneksi->query("SELECT * FROM list_kelas");
                while($data = $sql->fetch_assoc()){?>
                
                    <option value="<?php echo $data['id_kelas'];?>"><?php echo $data['kelas'];?></option>
                <?php } ?>
            </select></td>
            </tr>
            <tr>
                <td class="soal">Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" id="jurusan">
                <option><?php echo $data2['jurusan'];?></option>
                <?php
                $sql = $koneksi->query("SELECT * FROM list_jurusan");
                while($data = $sql->fetch_assoc()){?>
                
                    <option value="<?php echo $data['id_jurusan'];?>" class="option"><?php echo $data['jurusan'];?></option>
                <?php } ?>
            </select></td>
            </tr>
            <tr>
                <td class="soal">Ambalan</td>
                <td>:</td>
                <td><select name="ambalan" id="ambalan">
                <option><?php echo $data2['ambalan'];?></option>
                <?php
                $sql = $koneksi->query("SELECT * FROM list_ambalan");
                while($data = $sql->fetch_assoc()){?>
                
                    <option value="<?php echo $data['id_ambalan'];?>"><?php echo $data['ambalan'];?></option>
                <?php } ?>
            </select></td>
            </tr>
            <tr>
                <td class="soal">Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan" value="<?php echo $data3['jabatan'];?>"></td>
            </tr>
            <tr>
                <td class="soal">Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="<?php echo $data1['password'];?>"></td>
            </tr>
            <tr id="input" style="margin-top:10px;">
                <td></td>
                <td style="text-align:center;"><input type="submit" value="Simpan" name="proses" style="margin-top: 20px; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></td>
            </tr>
            </table>
        </form>
        </fieldset>
        </div>

        <?php
    
        include "koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi, "update anggota set
            nama = '$_POST[nama]',
            id_kelas = '$_POST[kelas]',
            id_jurusan = '$_POST[jurusan]',
            id_sangga = '$_POST[sangga]',
            id_ambalan = '$_POST[ambalan]'
            where id = '$_GET[id]'");

            mysqli_query($koneksi,"update user set
            username = '$_POST[username]',
            password = '$_POST[password]'
            where id = '$_GET[id]'");

            mysqli_query($koneksi,"update dewan_ambalan set
            jabatan = '$_POST[jabatan]'
            where id = '$_GET[id]'");

            echo "<center>";
            echo "Data Berhasil Diubah!";
            echo "</center>";
            echo "<meta http-equiv=refresh content=2;URL='anggota.php'>";
        }


        ?>
    </body>
</html>

        <?php

        include "koneksi.php";
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"update anggota set
            nama = '$_POST[nama]',
            kelas = '$_POST[kelas]',
            sangga = '$_POST[sangga]',
            ambalan ='$_POST[ambalan]'
            where id = '$_GET[id]'");

            echo "Data Baru Telah Tersimpan!";
            echo "<meta http-equiv=refresh content=2;URL='anggota.php'>";
        }

        ?>
    </body>
</html>