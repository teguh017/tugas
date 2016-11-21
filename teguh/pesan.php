<html>
	<head>
		<title>Pesan Barang</title>
	</head>
	<body>
		<?php
			if(isset($_POST["submit"])){
				include ("koneksi.php");
				
				$Nama				= $_POST["Nama"];
				$Alamat				= $_POST["Alamat"];
				$Nomer_telepon		= $_POST["Nomer_telepon"];
				$Nama_barang		= $_POST["Nama_barang"];
				$Jumlah_barang		= $_POST["Jumlah_barang"];
				
				$sql = "INSERT INTO pemesan
						VALUES (null, '$Nama', '$Alamat', '$Nomer_telepon', '$Nama_barang', '$Jumlah_barang')";
						
				$hasil = mysql_query($sql) or die("Query gagal dieksekusi");
				
				if($hasil ==TRUE){
					echo "Barang sudah ditambah <br />";
					echo "<a href='daftarbarang.php'>Lihat barang yang dipesan</a>";
				}
				else{
					echo "Gagal menambahkan user baru";
				}
			}
		?>
		<form action="pesan.php" method="post">
			<label for="Nama">Masukkan Nama :</label>
			<input type="text" name="Nama"/>
			<br />
			
			<label for="Alamat">Masukkan Alamat :</label>
			<input type="text" name="Alamat"/>
			<br />
			
			<label for="Nomer_telepon">Masukkan Nomer Telepon :</label>
			<input type="text" name="Nomer_telepon"/>
			<br />
			
			<label for="Nama_barang">Masukkan Nama Barang yang dipesan :</label>
			<input type="text" name="Nama_barang"/>
			<br />
			
			<label for="Jumlah_barang">Masukkan Jumlah Barang yang dipesan :</label>
			<input type="text" name="Jumlah_barang"/>
			<br />
			
			<input type="submit" name="submit" value="Simpan"/>
		</form>
	</body>
</html>