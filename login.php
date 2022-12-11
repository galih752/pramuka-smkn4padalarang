<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .login:hover{
            box-shadow: 4px 4px 6px black;
        }
        input{
                margin-bottom:5px; 
                background-color:rgb(4, 87, 38); 
                border:2px solid white; 
                border-radius:10px; 
                width: 150px; 
                height:22px; 
                color:white;"
            }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
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
                </ul>
            </nav>
        </div>
        <form action="" method="POST">
            <fieldset style="width : 250px; display: block; margin:auto; margin-top:20px; border-radius: 5px; box-shadow: 4px 4px 6px black;">
            <table align="center" style="font-family:comic sans ms; color:white;">
                <tr>
                    <th colspan="2" height="40">LOGIN</th>
                </tr>
                <tr>
                    <td width="100">Username</td>
                    <td><input type="text" name="username" ></td>
                </tr>
                <tr>
                    <td width="100">Password</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td  style="margin-top:70px;"><input class="login" type="submit" value="login" name="proseslog" style=" margin-top: 20px; background-color:rgb(4, 87, 38); border:2px solid white; border-radius:10px; width: 150px; height:28px; color:white;" ></td>
                </tr>
            </table>
</fieldset>
        </form>
        <center><p style="color:white; font-family:comic sans ms;">Belum memiliki akun? <a href="daftar.php" style=" color:white;">Registrasi</a> disini.</p></center>
        <?php
        if(isset($_POST['proseslog'])){
            $sql=mysqli_query($koneksi,"select * from admin where username='$_POST[username]'
            and password = '$_POST[password]' ");
            $sql1=mysqli_query($koneksi,"select * from user where username='$_POST[username]'
            and password = '$_POST[password]' ");

            $cek = mysqli_num_rows($sql);
            $cek1 = mysqli_num_rows($sql1);
                if($cek > 0){
                    $_SESSION['username'] = $_POST['username'];

                    echo "<meta http-equiv=refresh content=0;URL='admin/index.php'>";
                }elseif($cek1 > 0){
                    $_SESSION['username'] = $_POST['username'];
                    echo "<meta http-equiv=refresh content=0;URL='user/index.php'>";
                }else{
                    echo "<script>";
                    echo "alert ('Username dan Password Salah!!')";
                    echo "</script>";
                    echo "<meta http-equiv=refresh content=0;URL='login.php'>";
                }
            }
        ?>
</body>
</html>