<?php
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman data</title>
  </head>
  <style>
			body{
				background-image: url(u.jpg);
      }
  </style>
  <body>

    <h2>Data Gambar</h2>
    <a href="index.php">Tambah gambar</a>
    
<?php
$query = mysqli_query($conn, "SELECT * FROM tb_gambar");
while($row=mysqli_fetch_array($query)){
?>
        <?php echo $row['id_gambar'] ?>
        <?php echo $row['nama'] ?>
        <img src="uploads/<?php echo $row['file'] ?>" width="200px" height="250px">
        
        <a href="edit.php?id=<?php echo $row['id_gambar'] ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $row['id_gambar'] ?>">Hapus</a>
      
    <?php } ?>
  </body>
</html>
