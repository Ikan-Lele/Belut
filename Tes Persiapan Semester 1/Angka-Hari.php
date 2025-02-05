<html>
    <head></head>
    <body>
        <center>
            <font color=blue font=Harington>
                <?php
                $hari=$_POST['hari'];

                if($hari % 7 == 1){
                    echo "Senin";
                } else if ($hari % 7 == 2) {
                    echo "Selasa";
                } else if ($hari % 7 == 3) {
                    echo "Rabu";
                } else if ($hari % 7 == 4) {
                    echo "Kamis";
                } else if ($hari % 7 == 5) {
                    echo "Jumat";
                } else if ($hari % 7 == 6) {
                    echo "Sabtu";
                } else if ($hari % 7 == 7) {
                    echo "Minggu";
                } 
                

                ?>
            </form>
            </font>
        </center>
    </body>
</html>