<html>
    <head></head>
    <body>
    <?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    echo "
    <center>
    <h1><font color=purple face=Harington>
    ";
    if ($user=='Lele' && $pass="password") {
        echo "
        <form method=post action=file_03.php>
            <input type=submit value=Lanjut>
        </form>
        ";
    } else if ($user=='' || $pass=""){
        echo "Username atau Password kosong";
    } else {
        echo "Anda sesad";
    }
    echo "
            </font></h1>
        </center>
        ";
        ?>
    </body>
</html>