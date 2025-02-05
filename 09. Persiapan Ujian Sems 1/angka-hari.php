<html>
    <head></head>
    <body>
        <center>
        <h1><font color=blue face=Jokerman>
            <?php
            $angka = $_POST['angka'];

            if ($angka % 7 == 1) {
                echo"Senin";
            } else if ($angka % 7 == 2) {
                echo"Selase";
            } else if ($angka % 7 == 3){
                echo"Rabu";
            } else if ($angka % 7 == 4) {
                echo"Kamis";
            } else if ($angka % 7 == 5) {
                echo"Jumat";
            } else if ($angka % 7 == 6) {
                echo"Sabtu";
            } else if ($angka % 7 == 0) {
                echo"Minggu";
            } 
            ?>
            </font></h1>
        </center>
    </body>
</html>