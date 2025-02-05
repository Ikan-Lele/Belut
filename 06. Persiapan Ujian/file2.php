<html>
    <head>

    </head>
    <body>
        <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        echo "
        <h1>
        <center> ";

        if ($user=="Lele" && $pass=="password"){
            echo "
            Login berhasil
            <form action=file3.php method=post>
                <input type=submit value=Next>
            </form>
            ";
        } else if ($user=="")  {
                echo"Username kosong";
        } else if ($pass=="")  {
            echo"Password kosong";
        } else {
            echo "Username atau password salah";
        }
        echo "
            </center>
        </h1>
            ";
        ?>
    </body>
</html>