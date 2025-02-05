<html>
    <head>
        <style></style>
    </head>
    <body>


        <?php
        $nama=$_POST['nama'];

        echo "
        <center>
            <h1><font color=blue face=Jokerman>Hasil</font></h1>
            <form method=post action=input.php>
                <table width=400px>
                    <tr>
                        <td><font color= red>Nama</font></td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>
                        ";
                        if ($nama=="Othello"){
                            echo "LDR";
                        } else if ($nama=="Ely"){
                            echo "Sesad";
                        } else if ($nama=="Felix"){
                            echo "Kucing";
                        } else {
                            echo "Ga tempe";
                        }
                        echo"
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