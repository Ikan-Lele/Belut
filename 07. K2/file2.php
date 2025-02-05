<html>
    <head>
        <style>
            input {
               border-color:white;
               background-color: #04AA6D;
            }
        </style>
    </head>
    <body>
        <?php
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if ($user=="Lele" && $pass=="Sesad"){
        echo"
        <center>
            <h1><font color=blue face=Jokerman>Masukkan Huruf</font></h1>
            <form action=file3.php method=post>
            <input type=text name=huruf>
            <br>
            <input type=submit value=Cek>
            <br>
            <font color=blue face=Jokerman>A : Amat Baik</font>
            <br>
            <font color=blue face=Jokerman>B : Baik</font>
            <br>
            <font color=blue face=Jokerman>C : Cukup</font>
            <br>
            <font color=blue face=Jokerman>D : Kurang</font>
            <br>
            <font color=blue face=Jokerman>E : Buruk</font>
            <br>
            <font color=blue face=Jokerman>Dst : Unknown</font>
            <br>
            </form>
        </center>
        ";
        } else {
            echo "
            <center>
                <h1><font color=blue face=Jokerman>Anda Sesad</font></h1>
            </center>
            ";
        }
        ?>
    </body>
</html>