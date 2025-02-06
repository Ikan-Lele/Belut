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
        <font color=red size=200px face='old english text'>Bilangan Kelipatan 5</font>
        <br>
        <table>
            <?php
            $batas=$_POST['batas'];
            
            for($i=5; $i<=$batas;$i++){
                if ($i % 10 == 0 && $i % 5 == 0) {
                    echo "<font color=white size=20px>$i</font><br>";
                } else if ($i % 5 == 0) {
                    echo "<font color=red size=20px>$i</font><br>";
                } 
                
            }
            ?>
            <font color=purple size=200px><u><a href="form.php"><<<</a></u></font>
    </center>
    </body>
</html>