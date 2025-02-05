<html>
    <head></head>
    <body>
    <center>
        <font color=blue size=200px face='old english text'>Genap</font>
        <br>
        <table>
            <?php
            $awal=$_POST['awal'];
            $akhir=$_POST['akhir'];
            
            for($i=$awal; $i<=$akhir;$i++){
                if($i % 2 == 0){
                    echo"$i <br>";
                }
            }
            ?>
    </center>
    </body>
</html>