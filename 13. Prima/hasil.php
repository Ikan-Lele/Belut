    <html>
    <head></head>
    <body>
    <center>
        <font color=blue size=200px face='old english text'>Prima</font>
        <br>
        <table>
            <?php
            $i=$_POST['angka'];         
            if($i < 2){
                echo "$i bukan bilagan prima";
            } else if ($i == 2 || $i == 3 || $i == 5){
                echo "$i adalah bilangan prima";
            } else if ($i % 2 == 0 || $i % 3 == 0 || $i % 5 == 0){
                echo "$i bukan bilangan prima";
            } else {
                echo "$i adalah bilangan prima";
            }
            
            
            ?>
    </center>
    </body>
</html>