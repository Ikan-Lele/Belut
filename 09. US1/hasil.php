<html>
    <head>
    </head>
    <body>
        <center>
            <font color=blue face="old english text mt">
                <?php
                $satuan=$_POST['satuan'];

                switch($satuan){
                    case("T"):
                        echo "Tera";
                        break;
                    case("G"):
                        echo "Giga";
                        break;
                    case("M"):
                        echo "Mega";
                        break;
                    case("K"):
                        echo "Kilo";
                        break;
                    case("m"):
                        echo "mili";
                        break;
                    case("n"):
                        echo "nano";
                        break;
                    case("p"):
                        echo "pico";
                        break;
                    default:
                        echo "Tidak ada di pilihan";
                }

                
                ?>
            </form>
            <br>
            <br>
            <u><a href=formlogin.php><<<</a></u>
            </font>
        </center>
    </body>
</html>