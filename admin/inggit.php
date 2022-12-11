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
		<title>Kiasan Ambalan Inggit Garnasih</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<label style="font-size:13pt;">INGGIT GARNASIH</label>
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
		<div class="lambang" align="center" style="display: block; margin: auto;" alt="Ambalan Inggit Garnasih">
			<img src="putri.png" width="210" heigt="230">
		</div>
		<div id="isi">
			<fieldset>
				<legend>Kiasan</legend>
				<pre>
1. Bentuk Perisai SEGI LIMA 
	Melambangkan falsafah Pancasila 
2. Bertuliskan SMKN 4 Padalarang 
	Ambalan INGGIT GAARNASIH merupakan ambalan yang di bentuk di 
	SMKN 4 dengan maksud siswi SMKN 4 Padalarang dapat berperan aktif 
	dalam mengembangkan dam menghidupkan kepramukaan yang ada di sekolah tersebut. 
3. Lambang BINTANG berwarna kuning emas 
	Melambangkan jiwa kepemimpnan yang luhur 

4. PADI dan KAPAS yang berbentuk Lingkaran 
	Melambangkan kemakmuran 
5. Sepasang BENDERA MERAH PUTIH melambangkan bendera Indonesia 
6. Sepasang BAMBU RUNCING berwarna kuning 
	Dilambangkan Sebagai senjata tradisional Indonesia yang dipergunakan dalam 
	melawan penjajah untuk kemerdekaan Indonesia. 
7. Sepasang TUNAS KELAPA berwarna kuning 
	Diartikan sepasang pramuka penegak putra dan penegak putri 
	yang memiliki semangat dan tekad kuat dalam mencapai tujuan dalam 
	suatu organisasi tetapi tetap berada dalam satuan terpisah 
8. PITA Berwarna Putih bertuliskan INGGIT GAARNASIH berwarna hitam 
	elambangkan nama dari ambalan penegak putri 
9. Bertuliskan 2011 merupakan tahun berdirinya ambalan 
10. Berbentuk Buku berwarna putih 
	Melambangkan penegak otto iskandar dinata dapat menimba 
	ilmu yang bermanfaat dan mengamalkan ilmu melalui gerakan pramuka 
11. TONGKAT OBOR berwarna hitam 
	Melambangkan keteguhan hati untuk menyumbangkan dharma bakti kepada 
	Nusa dan Bangsa. 
12. CAHAYA API berwarna merah menyala 
	Melambangkan semangat penegak inggit gaarnasih yang tidak pernah padam 
13. Dasar PRISAI SEGI LIMA berwarna merah 
	melambangkan bahwa ambalan otto iskandar dinata selalu mendasar pada 
	keberanian dengan berpegang teguh pada aturan dan hukum 
14. Bingkai PRISAI SEGI LIMA berwarna Biru tua/ langit 
	melambangkan bahwa ambalan inggit gaarnasih selalu memiliki 
	kedamaikan karena memiliki aturan
					</pre>
			</fieldset>
		</div>
		<footer>
			<p align="center">Creat by Pramuka Nepal</p>
			<p align="center">&copy; 2022 </p>
		</footer>
	</body>
</html>