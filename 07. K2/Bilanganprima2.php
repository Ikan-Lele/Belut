<html>
    <head></head>
    <body>
        <?php

        $angka=$_POST['angka'];
        echo"
        <center>
            <h1><font color=red face=Chiller>Cek Bilangan Prima</font></h1>
            <form method=post action=Bilanganprima1.php>
            <table>
            <tr>
            <td>
            $angka
            </td>
            <td>
            ";
            if($angka == 2 || $angka == 3 || $angka == 5 ) {
                echo "Bilangan Prima";
            } else if ($angka % 2 == 0 || $angka % 3 == 0|| $angka % 5 == 0){
                echo "Bukan Bilangan Prima";
            } else {
                echo "Bilangan Prima";
            }
            
        echo"
        </td>
        </tr>
        <input type=submit value=back>
        </table>
        </form>
        </center>
        ";
        ?>
    </body>
</html>