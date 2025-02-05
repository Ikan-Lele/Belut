<html>
    <head>

    </head>
    <body>
        
    <?php
    $nama = $_POST['nama'];

        echo "
        <center>
            <h1><font color=purple face=Jokerman>Cek Nama</font></h1>
            <form action=file3.php method=post>
                <table width=400px>
                    <tr>
                        <td>Masukan Nama</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td> ";
                        if ($nama == "Lele") {
                            echo "Ikan";
                        } else if ($nama=="") {
                            echo "Nama Kosong 0.0";
                        } else {
                            echo "Ga tempe";
                        }
                        echo "
                        </td>
                    </tr>
                    </table>
                    <input type=submit value=Back>
            </form>
        </center>
        ";
        ?>
    </body>
</html>