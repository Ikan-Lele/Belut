<html>
    <head>
        <style>
            h {
                border-style:double;
                border-width:5px;
                border-color:blue;
                padding:20px;
            }

            .a {
                border-style:solid;
                border-width:5px;
                border-color:yellow blue red red;
                border-radius:100px;
            }
        </style>
    </head>
    <body>
        <?php
        $nu= $_POST['nu'];
        $nt= $_POST['nt'];
        $ns= $_POST['ns'];
        $jn= $nu + $nt + $ns;
        $nr= $jn/3;
        
        echo"
        <center>
            <h1><font color=blue face=Jokerman><h>Hitungan</h></font></h1>
            <form action=10.UH1_01.php>
                <table width=500px>
                    <tr>
                        <td><font color=blue>Nilai Ujian</font></td>
                        <td>$nu</td>
                    </tr>
                    <tr>
                        <td><font color=blue>Nilai Tugas</font></td>
                        <td>$nt</td>
                    </tr>
                    <tr>
                        <td><font color=blue>Nilai Semester</font></td>
                        <td>$ns</td>
                    </tr>
                    <tr>
                        <td class=a><font color=blue>Jumlah Nilai</font></td>
                        <td><font color=red>$jn</font></td>
                        </tr>
                        <tr>
                        <td class=a><font color=blue>Nilai Rapot</font></td>
                        <td><font color=red>$nr</font></td>
                    </tr>
                    </table>
                <input type=submit value=Back>
            </form>
        </center>
        ";
        ?>
    </body>
</html>