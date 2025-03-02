<html> 
<head>        
    <title>Latihan Ujian Praktik 2024</title> 
</head> 
  
<body> 
<table border=1 cellspacing=0 align=center> 
    <thead> 
        <tr> 
            <th>#</th> 
            <th>Nama</th> 
            <th>Jenis Kelamin</th> 
            <th>Kontak</th> 
            <th>Alamat</th> 
        </tr> 
    </thead> 
    <tbody> 
        <?php 
            $koneksi = mysqli_connect("localhost","root","","crudn");
            $no=1;
            $data=mysqli_query($koneksi, "SELECT * FROM user");
            while ($d=mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td> 
            <td><?php echo $d['nama']; ?></td> 
            <td><?php echo $d['kelamin']; ?></td> 
            <td><?php echo $d['kontak']; ?></td> 
            <td><?php echo $d['alamat']; ?></td>    
                                        
        </tr> 
        <?php 
            } 
        ?> 
    </tbody> 
</table> 
<center> 
<a href="index.php"><<<<</a>
</center>
</body>
</html>