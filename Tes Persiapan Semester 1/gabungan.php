<html>
    <head>
        <style>
            .a {
                width:10px;
            }
        </style>
    </head>
    <body>
        <center>
            <font color=blue font=Harington>
                <?php
                $pilihan=$_POST['pilihan'];
                
                switch($pilihan) {
                    case(1):
                    echo "<form action=Angka-Nilai.php method=post>
                    <h1>Angka-Hari</h1>
                    <table>
                        <tr>
                            <td>Angka</td>
                        <td><input class=a type=text name=nilai></td>
                    </tr>
                    </table>
                    <input type=submit value=submit>
                    <br>
                    91-100 : A
                    <br>
                    81-90 : B
                    <br>
                    71-80 : C
                    <br>
                    61-70 : D
                    <br>
                    00-60 : E 
                ";
                        break;
                    case(2):
                    echo "<form action=Angka-Hari.php method=post>
                    <h1>Angka-Nilai</h1>
                    <table>
                        <tr>
                            <td>Angka</td>
                        <td><input type=text name=hari></td>
                    </tr>
                    </table>
                    <input type=submit value=submit>
                    <br>
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
                ";
                break;
                default:
                echo "Ikan Lele makan Salad <br> Selamat Anda Sesad!";
            } 


                ?>
            </form>
            </font>
        </center>
    </body>
</html>