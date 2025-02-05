<html>
    <head>
        <style>
            input.a {
                background: purple;
                border: 1px solid red;
            }
            
            v {
                background: red;
                border: 1px solid purple;
            }
        </style>
    </head>
    <body>
        <center>
            <font size=100px face=Harrington>Balok</font>
            <form action=09.k1_02.php method=post>
                <table>
                    <tr>
                        <td><font color=red>Panjang</font></td>
                        <td><input class=a onclick="v" type=text name=panjang></td>
                    </tr>
                    <tr>
                        <td><font color=red>Lebar</font></td>
                        <td><input type=text name=lebar></td>
                    </tr>
                    <tr>
                        <td><font color=red>Tinggi</font></td>
                        <td><input type=text name=tinggi></td>
                    </tr>
                    <tr>
                        <td><font color=red>Volume</font></td>
                        <td><input type=text name=volume></td>
                    </tr>
                    <tr>
                        <td><font color=red>Jumlah Panjang Rusuk</font></td>
                        <td><input type=text name=jpr></td>
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