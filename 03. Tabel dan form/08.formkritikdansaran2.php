<html>
    <head>
        <style>
            textarea {
                overflow-y:scroll;
            }
        </style>
    </head>
    <body>
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $kns = $_POST['kns'];

        echo "
        <center>
            <font size=100px>Form Saran & Kritik</font>
            <br>
            <br>
            <br>
            <form method=post action=08.formkritikdansaran2.php>
                <table width=400pt>
                    <tr>
                        <td>Nama</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Telp.</td>
                        <td>$telp</td>
                    </tr>
                    <tr>
                        <td>Kritik dan Saran</td>
                        <td>$kns</td>
                    </tr>
                </table>
            </form>
        </center>
        ";
        ?>
    </body>
</html>