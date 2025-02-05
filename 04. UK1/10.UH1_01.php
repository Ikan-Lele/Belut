<html>
    <head>
        <style>
            a {
                border-style:solid;
                border-width:5px;
                border-color:yellow blue red red;
                padding:10px;
                border-radius:100px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1><font color=red face=Harrington><a>Nilai</a></font></h1>
            <form method=post action="10.UH1_02.php">
                <table width=500px>
                    <tr>
                        <td><font color=blue>Nilai Ujian</font></td>
                        <td><input type=text name=nu></td>
                    </tr>
                    <tr>
                        <td><font color=blue>Nilai Tugas</font></td>
                        <td><input type=text name=nt></td>
                    </tr>
                    <tr>
                        <td><font color=blue>Nilai Semester</font></td>
                        <td><input type=text name=ns></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type=submit value=Hitung><input type=reset value=Batal></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>