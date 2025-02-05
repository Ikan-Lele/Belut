<html>
    <head></head>
    <body>
        <center>
            <font color=blue font=Harington>
                <h1>Menu</h1>
                <?php
                $user=$_POST['user'];
                $pass=$_POST['pass'];

                if ($user == "Lele" && $pass == "Ikan" || $user == "PHP" && $pass == "php") {
                echo "
                <form action=gabungan.php method=post>
                    <table>
                        <tr>
                            <td>Pilihan</td>
                        <td><input type=text name=pilihan></td>
                    </tr>
                    </table>
                    <input type=submit value=submit>
                    <br>
                    01. Angka-Nilai
                    <br>
                    02. Angka-Hari
                ";
                } else {
                    echo "Ikan Lele makan Salad <br> Selamat Anda Sesad!";
                }
                ?>
            </form>
            </font>
        </center>
    </body>
</html>