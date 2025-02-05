<html>
    <head><style>
        a {
            text-decoration-style: double;
            text-decoration-color: blue;
        }
    </style></head>
    <body>
        <center>
            <font color=blue font=nilaington>
                <?php
                $nilai=$_POST['nilai'];
                if ($nilai >= 0 || $nilai <=100){
                if($nilai >= 91){
                    echo "A";
                } else if ($nilai >= 81) {
                    echo "B";
                } else if ($nilai >= 71) {
                    echo "C";
                } else if ($nilai >= 61) {
                    echo "D";
                } else {
                    echo "E";
                }
                
                
            } else {
                echo "Ikan Lele makan Salad <br> Selamat Anda Sesad!";
            }
                ?>
            </form>
            <a href=form_login.php>Back</a>
            </font>
        </center>
    </body>
</html>