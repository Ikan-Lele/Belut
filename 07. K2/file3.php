<html>
    <head>
    <style>

        </style>
    </head>
    <body>
        <?php
        $huruf=$_POST['huruf'];
        echo "
        <center>
        <form method=post action=file1.php>
        ";
        if($huruf=="A"){
            echo"
            <center><h1><font color=blue face=Jokerman>Amat Baik</font></h1></center>
            ";
        } else if($huruf=="B"){
            echo"
            <h1><font color=blue face=Jokerman>Baik</font></h1></center>
            ";
        } else if($huruf=="C"){
            echo"
            <h1><font color=blue face=Jokerman>Cukup</font></h1></center>
            ";
        } else if($huruf=="E"){
            echo"
            <h1><font color=blue face=Jokerman>Kurang</font></h1></center>
            ";
        } else if($huruf=="F"){
            echo"
            <h1><font color=blue face=Jokerman>Buruk</font></h1></center>
            ";
        } else {
            echo"
            <h1><font color=blue face=Jokerman>Unknown</font></h1></center>
            ";
        }
        echo "
        <input type=submit value=back>
        </form>
        </center>
        ";
        ?>
    </body>
</html