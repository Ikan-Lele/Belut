<html>
    <head></head>
    <body>
        <?php
        $nama = $_POST['nama'];
        if ($nama=="Lele") {
            $keterangan="Ikan";
        } else if ($nama=="Felix"){
            $keterangan="Kucing";
        } else if ($nama==""){
            $keterangan="Kosong";
        } else {
            $keterangan = "Ga kenal";
        }

        echo "
        <center>
            <h1><font color=purple face=Harington>Cek Nama</font></h1>
            <form action=file_03.php method=post>
            <table width=400px>
                <tr>
                    <td><font color=red>Masukan Nama</font></td>
                    <td>$nama</td>
                </tr>
                <tr>
                    <td><font color=red>Keterangan</font></td>
                    <td>$keterangan</td>
                </tr>
            </table>
            <input type=submit value=Balik>
            </form>
        </center>
        ";
        ?>
    </body>
</html>