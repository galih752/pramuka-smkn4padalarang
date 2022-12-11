<?php
 error_reporting(0);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Rekap.xls");
?>
<h1>DATA PENGUMPULAN TUGAS</h1>
<table class="tabel1" style="color:black;" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Materi</th>
                <th>Pengumpulan</th>
                <th>Tanggal Pengumpulan</th>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = $_POST['query'];

        if($query !=''){
            $ambil = mysqli_query($koneksi, "select * from dewan where 
            id like '".$query."' or
            nama_siswa like '%".$query."%' or
            subject like '%".$query."%' or
            file_tugas like '%".$query."%' or
            tanggal_pengumpulan like '%".$query."%'");


        }else{
            $ambil = mysqli_query($koneksi, "SELECT pengumpulan.nama_siswa, tugas.subject, pengumpulan.file_tugas, pengumpulan.tanggal_pengumpulan FROM `pengumpulan` LEFT JOIN tugas ON tugas.id=pengumpulan.id");
        }
        if(mysqli_num_rows($ambil)){
        while ($tampil = mysqli_fetch_array($ambil)){
            echo "
            <tr>
                <td style='text-align:center;'>$no</td>
                <td style='text-align:center;'>$tampil[nama_siswa]</td>
                <td style='text-align:center;'>$tampil[subject]</td>
                <td style='text-align:center;'><a href='../pengumpulan/$tampil[file_tugas]' style='color:black;text-decoration:none;'>$tampil[file_tugas]</a></td>
                <td style='text-align:center;'>$tampil[tanggal_pengumpulan]</td>
            </tr>";

            $no++;
        }
    }else{
        echo "<tr><td colspan='7' align='center'>NO DATA</td></tr>";
    }


    ?>
    </table>