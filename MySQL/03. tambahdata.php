<html>
<head>
<title>Menambah data</title>
</head>
<body>
<?php //memulai script PHP
    $nama=$_POST['nama'];
    $sandi=$_POST['sandi'];
    $konek=mysqli_connect("localhost","root","","ia_2");
    $sandi=mysqli_query($konek,"INSERT INTO tabel1 (username,password) VALUES ('$nama','$sandi')");
    echo "<center><font face=arial size=5 color=blue>Proses Sukses</font>";
?>
<center><a href="03. formtambahdata.php"><<<</a></center>
</body>
</html>