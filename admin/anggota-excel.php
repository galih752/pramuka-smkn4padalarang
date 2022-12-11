<?php
error_reporting(0);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data-Anggota.xls");
?>
<html>

<head>
    <title> Anggota </title>
</head>

<body>
    <center>
        <h1 id="judul" style=" font-family:comic sans ms; text-align : center;">ANGGOTA PRAMUKA SMKN 4 PADALARANG</h1>
    </center>
    <div id="data">
        <table
            style="margin-bottom : 10px; margin-left:auto;margin-right:auto; box-shadow: 4px 4px 6px #333; width:550; height:100;"
            border="1">
            <b>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Sangga</th>
                    <th>Ambalan</th>
                </tr>
            </b>
            <?php
        include "koneksi.php";
        $no = 1;
        $query = $_POST['query'];

        if ($query != '') {
            $ambil = mysqli_query($koneksi, "select * from anggota_pramuka where 
            nama like '%" . $query . "%' or
            kelas like '%" . $query . "%' or
            sangga like '%" . $query . "%' or
            ambalan like '%" . $query . "%'");
        } else {
            $ambil = mysqli_query($koneksi, "select * from anggota_pramuka");
        }
        if (mysqli_num_rows($ambil)) {

            while ($tampil = mysqli_fetch_array($ambil)) {
                echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[kelas] $tampil[jurusan]</td>
                <td>$tampil[sangga]</td>
                <td>$tampil[ambalan]</td>
            </tr>";

                $no++;
            }
        } else {
            echo "<tr><td colspan='6' align='center'>NO DATA</td></tr>";
        }
        ?>
        </table>

</html>