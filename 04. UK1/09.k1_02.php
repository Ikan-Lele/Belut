<html>
    <head>
        <style>
            p {
                border: 10px solid purple;
            }

        </style>
    </head>
    <body>
        <?php
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        $volume = $panjang * $lebar * $tinggi ;
        $jpr = 4*($panjang + $lebar + $tinggi);
        echo "
        <center>
            <p><font size=100px face=Harrington>Hitung</font></p>
            <form action=09.k1_01.php method=post>
                <table>
                    <tr>
                        <td><font color=blue>Panjang</font></td>
                        <td>$panjang</td>
                    </tr>
                    <tr>
                        <td><font color=blue>Lebar</font></td>
                        <td>$lebar</td>
                    </tr>
                    <tr>
                        <td><font color=blue>Tinggi</font></td>
                        <td>$tinggi</td>
                    </tr>
                    <tr>
                        <td><font color=blue>Volume</font></td>
                        <td><font color=red>$volume cm<sup>3</sup></font></td>
                    </tr>
                    <tr>
                        <td><font color=blue>Jumlah Panjang Rusuk</font></td>
                        <td><font color=red>$jpr cm</font></td>
                    </tr>
                </table>
                <input type=submit value=Back>
            </form>
        </center>
        ";
        ?>
    </body>
</html>