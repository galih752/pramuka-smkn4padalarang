<?php
error_reporting(0);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Dewan.xls");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dewan Ambalan</title>
    </head>
    <body>
        <h1 style=" font-family:comic sans ms; text-align : center;">DEWAN AMBALAN PRAMUKA SMKN 4 PADALARANG</h1>
        <div id="data">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jabatan</th>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = $_POST['query'];

        if($query !=''){
            $ambil = mysqli_query($koneksi, "select * from dewan where 
            id_dewan like '".$query."' or
            nama like '%".$query."%' or
            kelas like '%".$query."%' or
            jabatan like '%".$query."%'");
        }else{
            $ambil = mysqli_query($koneksi, "select * from dewan");
        }
        if(mysqli_num_rows($ambil)){

        while ($tampil = mysqli_fetch_array($ambil)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[kelas] $tampil[jurusan]</td>
                <td>$tampil[jabatan]</td>
            </tr>";

            $no++;
        }
    }else{
        echo "<tr><td colspan='6' align='center'>NO DATA</td></tr>";
    }
    ?>
    </table>
</div>
    </body>
                <p align="center">Creat by Pramuka Nepal</p>
                <p align="center">&copy; 2022 </p>
            </footer>
    </body>
</html>