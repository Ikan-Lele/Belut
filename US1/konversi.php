<html>
    <head></head>
    <body>
        <center>
        <h1>
            <font color=blue face="old english text mt">
                Konversi</font>
                <?php
                $user=$_POST['user'];
                $pass=$_POST['pass'];

                if ($user == "PHP" && $pass == "php") {
                echo "
                <form action=hasil.php method=post>
                <table>
                <br>
                <br>
                    <tr>
                        <td><h1>Satuan : </h1></td>
                        <td><input type=text name=satuan></td>
                    </tr>
                </table>
                <br>
                <input type=submit value=Ok>
                <br>
                <br>
                <font color=red>Tera</font>
                <font color=orange>Giga</font>
                <font color=yellow>Mega</font>
                <font color=green>Kilo</font> <br>
                <font color=blue>mili</font>
                <font color=pink>nano</font>
                <font color=purple><u>pico</u></font>
                </h1>
                ";
                } else {
                    echo "Access Denied!";
                }
                ?>
            </form>
        </center>
    </body>
</html>