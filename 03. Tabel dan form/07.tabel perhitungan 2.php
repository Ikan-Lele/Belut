<html>
    <head></head>
    <body>
        <?php
            $n1 =$_POST['n1'];
            $n2 =$_POST['n2'];
            $jumlah = $n1 + $n2;
            $selisih =$n1 - $n2; 
            $perkalian =$n1 * $n2;
            $pembagian =$n1 / $n2;
            $sisabagi =$n1 % $n2;
            
            echo "
            <center>
            <font size=100px>FORM PERHITUNGAN</font>
            <form method=post>
            <table>
            <tr>
                    <td>Nilai 1</td>
                    <td><input type=text value=$n1></td>
                </tr>
                <tr>
                    <td>Nilai 2</td>
                    <td><input type=text value=$n2></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type=text value=$jumlah></td>
                </tr>
                <tr>
                    <td>Selisih</td>
                    <td><input type=text value=$selisih></td>
                </tr>
                <tr>
                    <td>Perkalian</td>
                    <td><input type=text value=$perkalian></td>
                </tr>
                <tr>
                    <td>Pembagian</td>
                    <td><input type=text value=$pembagian></td>
                </tr>
                <tr>
                    <td>Sisa Bagi</td>
                    <td><input type=text value=$sisabagi></td>
                </tr>
                </table>
            </form>
        </center>
        ";
        ?>
    </body>
</html>