<html>
    <head></head>
    <body>
    <center>
        <font color=blue size=200px face='old english text'>Perulangan Kata</font>
        <br>
        <table>
            <?php
            $kata=$_POST['kata'];
            $jumlah=$_POST['jumlah'];

            for($i=1; $i<=$jumlah;$i++){
                echo "$i $kata<br>";
            }
            ?>
    </center>
    </body>
</html>