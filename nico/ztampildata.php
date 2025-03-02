<html>
    <head>
        <title>Menampilkan data</title>
    </head>
    <body>
        <center>
            <?php
                $konek=mysqli_connect("localhost","root","","pengguna_ia2");
                $hasil=mysqli_query($konek,"SELECT * FROM user");
                echo "<font size=5 color=blue>Tabel User</font>";
                echo "<table align=center border=1 width=30%><tr><td align=center>User Name</td><td align=center>Password</td></tr>";
                while($baris=mysqli_fetch_array($hasil))
                {
                    $nama=$baris["username"];
                    $sandi=$baris["password"];
                    echo "<tr><td align=center>$nama</td><td align=center>$sandi</td></tr>";
                };
                echo "</table>";
            ?>
            <br>
            <a href="formtambahdata.php"><<<</a>
        </center>
    </body>
</html>