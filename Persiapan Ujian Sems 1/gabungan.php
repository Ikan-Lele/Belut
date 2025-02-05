<html>
    <head></head>
    <body>
        <?php

$pilihan = $_POST['pilihan'];

switch($pilihan) {
    case(1):
        echo "
        <center>
        <h1><font color=blue face=Jokerman>Zodiac</font></h1>
        <form action=zodiac.php method=post>
            <table>
                <tr>
                    <td><font color=blue>Tahun</font></td>
                    <td><input type=text name=zodiac></td>
                </tr>
                </table>
                <input type=submit value=Ok>
            </form>
            </center>
            ";
            break;
            
            case(2):
                echo "
                <center>
                <h1><font color=blue face=Jokerman>Nama-Hari</font></h1>
                <form method=post action=angka-hari.php>
                <table>
                    <tr>
                        <td><font color=blue face=Jokerman>Masukkan Angka                   </font></td>
                        <td><input type=text name=angka></td>
                    </tr>
                </table>
                <br>
                <input type=submit value=Ok>
                <br>
                <h1><font color=blue face=Jokerman>
                1 : Senin
                <br>
                2 : Selasa
                <br>
                3 : Rabu
                <br>
                4 : Kamis
                <br>
                5 : Jumat
                <br>
                6 : Sabtu
                <br>
                7 : Minggu
                <br>
                Dst.
                </font></h1>
                </form>
                </center>
                ";
                break;
                
                case(3):
            echo "
            <html>
    <head></head>
    <body>
        <center>
            <h1><font color=blue face=Jokerman>Nilai</font></h1>
            <form method=post action=angka-nilai.php>
            <table>
                    <tr>
                        <td><font color=blue face=Jokerman>Masukkan Nilai</font></td>
                        <td><input type=text name=nilai></td>
                    </tr>
                </table>
                <br>
                <input type=submit value=Ok>
                <br>
                <h1><font color=blue face=Jokerman>
                91-100 : A
                <br>
                81-90 : B
                <br>
                71-80 : C
                <br>
                61-70 : D
                <br>
                00-60 : E
                </font></h1>
            </form>
        </center>
    </body>
    </html>
    ";
    break;
            default :
        echo "
        <center><h1><font color=blue face=Jokerman>
        Ikan Lele makan Salad
        <br>
        Selamat anda Sesad !
        </font></h1></center>
        ";
        }
        ?>
    </body>
</html>