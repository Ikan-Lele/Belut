<html>
    <head>
        <style></style>
    </head>
    <body>
        <?php

        $namal =$_POST['namal'];
        $namap =$_POST['namap'];
        if ($namal == "Ryo" && $namap == "Cailyn"){
            $hasil = "100%";
        } else if ($namal == "Othello" && $namal == "Palembang"){
            $hasil = "LDR";
        } else if ($namal == "Max" && $namal == "Tio"){
            $hasil = "100%";
        } else if ($namal == "Raymond" && $namal == "Edmond"){
            $hasil = "999%";
        } else {
            $hasil = "0%";
        }

        echo "
        <center>
        <h1><font color=blue face=Chiller>Cek jodoh</font></h1>
        <form action=input.php method=post>
            <table width=500px>
                <tr>
                    <td>Nama laki-laki</td>
                    <td>$namal</td>
                </tr>
                <tr>
                    <td>Nama perempuan</td>
                    <td>$namap</td>
                </tr>
            </table>
            <h1>
                $hasil
            </h1>
        </form>
        </center>
        ;"
        ?>

        <h1>

        </h1>
    </body>
</html>