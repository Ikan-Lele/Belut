<html>
    <head>
        <style>
            textarea {
                overflow-y:scroll;
            }
        </style>
    </head>
    <body>
        <center>
            <font size=100px>Form Saran & Kritik</font>
            <br>
            <br>
            <br>
            <form method=post action=08.formkritikdansaran2.php>
                <table width=400pt>
                    <tr>
                        <td>Nama</td>
                        <td><input type=text name=nama></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type=text name=email></td>
                    </tr>
                    <tr>
                        <td>Telp.</td>
                        <td><input type=text name=telp></td>
                    </tr>
                    <tr>
                        <td>Kritik dan Saran</td>
                        <td><textarea name=kns cols=30 rows=4></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type=submit name=Tampil><input type=reset value=Batal></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>