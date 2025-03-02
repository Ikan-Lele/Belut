<html> 
    <head> 
        <title>Simpan</title> 
    </head> 
    <body> 
    <?php  
    $koneksi = mysqli_connect("localhost","root","","crudn"); 
    $nama = $_POST['nama']; 
    $kelamin = $_POST['kelamin']; 
    $kontak = $_POST['kontak']; 
    $alamat = $_POST['alamat'];     
    mysqli_query($koneksi,"insert into user(nama,kelamin,kontak,alamat)
    values('$nama','$kelamin','$kontak','$alamat')");  
    echo "<center><font size=7 color=blue> Data telah disimpan! <br>"; 
?> 
<a href="data.php">Tampil</a>
</center></font> 
    </body>
</html>