<html>
    <head></head>
    <body>
        <center>
        <h1><font color=blue face=Jokerman>
            <?php
            $nilai = $_POST['nilai'];

           if ($nilai <= 100 && $nilai >= 0 ){
            if ($nilai >= 91) {
                echo"A";
            } else if ($nilai >= 81) {
                echo"B";
            } else if ($nilai >= 71){
                echo"C";
            } else if ($nilai >= 61) {
                echo"D";
            } else {
                echo"E";
            }
           } else {
           echo "
           Ikan Lele makan Salad
           <br>
            Selamat anda Sesad !";
           }
            ?>
            </font></h1>
        </center>
    </body>
</html>