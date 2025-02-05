<html>
    <head></head>
    <body>
        <center>
            <?php
            $zodiac = $_POST['zodiac'];

            if ($zodiac % 12 == 3) {
            echo "<h1><font color=purple face=Harington>Babi</font></h1>";
            } else if ($zodiac % 12 == 2) {
            echo "<h1><font color=purple face=Harington>Anjing</font></h1>";
            } else if ($zodiac % 12 == 1){
                echo "<h1><font color=purple face=Harington>Ayam</font></h1>";
            } else if ($zodiac % 12 == 0) {
                echo "<h1><font color=purple face=Harington>Monyet</font></h1>";
            } else if ($zodiac % 12 == 11) {
                echo "<h1><font color=purple face=Harington>Kambing</font></h1>";
            } else if ($zodiac % 12 == 10) {
                echo "<h1><font color=purple face=Harington>Kuda</font></h1>";
            } else if ($zodiac % 12 == 9) {
                echo "<h1><font color=purple face=Harington>Ular</font></h1>";
            } else if ($zodiac % 12 == 8) {
                echo "<h1><font color=purple face=Harington>Naga</font></h1>";
            } else if ($zodiac % 12 == 7) {
                echo "<h1><font color=purple face=Harington>Kelinci</font></h1>";
            } else if ($zodiac % 12 == 6) {
                echo "<h1><font color=purple face=Harington>Harimau</font></h1>";
            } else if ($zodiac % 12 == 5) {
                echo "<h1><font color=purple face=Harington>Kerbau</font></h1>";
            } else if ($zodiac % 12 == 4) {
                echo "<h1><font color=purple face=Harington>TIkus</font></h1>";
            }
            ?>
        </center>
    </body>
</html>