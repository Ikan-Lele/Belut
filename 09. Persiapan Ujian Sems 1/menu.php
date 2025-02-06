<html>
    <head></head>
    <body>
        <?php

        $id = $_POST['id'];
        $pass = $_POST['pass'];

        if ($id == "Lele" && $pass == "Ikan" || $id == "PHP" && $pass == "php"){
            echo "
            <center>
            <h1><font color=blue face=Chiller>Menu</font></h1>
            <form action=gabungan.php method=post>
            <table>
            <tr>
            <td><font color=blue>Pilihan</font></td>
            <td><input type=text name=pilihan></td>
            </tr>
            </table>
            <input type=submit value=Login>
            <br>
            <h1><font color=blue face=Chiller>
            Menu
            <br>
            01. Zodiac
            <br>
            02. Angka-Hari
            <br>
            03. Nilai-Huruf
            </font></h1>
            </form>
            </center>
            ";
            } else {
                
                echo "<center><h1><font color=blue face=Jokerman>Login Success! <br> TAAPI BOOONG!</font></h1><center>";
            }
        ?>
    </body>
</html>