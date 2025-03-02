<html>
    <head>
        <style>
            a:hover {
                background-color : yellow;
            }
        </style>
    </head>
    <body bgcolor=black>
    <center>
        <font color=red size=200px face='old english text'>Menu</font>
        <br>
        <table>
            <?php
            $pilihan=$_POST['pilihan'];

            if ($pilihan == 1){
                echo "Halp";
            } else {
                echo "No";
            }
            
            ?>
            <font color=purple size=200px><u><a href="form.php"><<<</a></u></font>
    </center>
    </body>
</html>