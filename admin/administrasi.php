<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>DOKUMEN PRAMUKA</title>
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
        <div class="file">
                <div class="isi_file">
                    <img src="adat.png" alt="ADAT AMBALAN"><br>
                    <a href="adat ambalan revisi 2018.docx" style="text-decoration:none;">ADAT AMBALAN</a>
                </div>
            </div>
            <div class="file">
                <div class="isi_file">
                    <img src="kop.png" alt="KOP SURAT"><br>
                    <a href="kop surat.docx" style="text-decoration:none;">KOP SURAT</a>
                </div>
            </div>
            <div class="file">
                <div class="isi_file">
                    <img src="proposal.png" alt="PROPOSAL"><br>
                    <a href="Proposal bantara 2021.docx" style="text-decoration:none;">PROPOSAL</a>
                </div>
            </div>
            <div class="file">
                <div class="isi_file">
                    <img src="laporan.png" alt="LAPORAN"><br>
                    <a href="laporan hasil kegiatan bantara 2022.docx" style="text-decoration:none;">LAPORAN KEGIATAN</a>
                </div>
            </div>
            <footer>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
            </footer>
    </body>
</html>