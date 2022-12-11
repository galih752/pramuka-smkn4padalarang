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
        <h1 style="text-align:center; color:white;">Tambah Data Anggota</h1>
        <div id="tambah">
        <fieldset style="width : 450px; display: block; margin:auto; margin-top:20px; border-radius: 5px; box-shadow: 4px 4px 6px black;">
            <form action="" method="post">
                <table style="margin-left:auto;margin-right:auto; color:ivory;">
            <tr>
                <td class="soal">Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td class="soal">Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td class="soal">Sangga</td>
                <td>:</td>
                <td><select name="sangga" id="sangga">
                    <option>SANGGA</option>
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
                    <option>KELAS</option>
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
                    <option>JURUSAN</option>
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
                    <option>AMBALAN</option>
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
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td class="soal">Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
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
            mysqli_query($koneksi, "insert into anggota set
            nama = '$_POST[nama]',
            id_kelas = '$_POST[kelas]',
            id_jurusan = '$_POST[jurusan]',
            id_sangga = '$_POST[sangga]',
            id_ambalan = '$_POST[ambalan]'");

            mysqli_query($koneksi,"insert into user set
            username = '$_POST[username]',
            password = '$_POST[password]'");

            mysqli_query($koneksi,"insert into dewan_ambalan set
            jabatan = '$_POST[jabatan]'");

            echo "<center>";
            echo "Akun Terdaftar!";
            echo "</center>";
            echo "<meta http-equiv=refresh content=2;URL='login.php'>";
        }


        ?>
    </body>
</html>