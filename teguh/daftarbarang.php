<html>
	<head>
		<title>Daftar Barang</title>
	</head>
	<body>
		<?php
			include("koneksi.php");
			
			$sql = "SELECT * FROM pemesan";
			$hasil = mysql_query($sql);
			
			if(mysql_num_rows($hasil) == 0) {
				echo "Belum ada barang yang dipesan";
			}
			else{
				?>
				<table border=1>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Nomer_telepon</th>
						<th>Nama_barang</th>
						<th>Jumlah_barang</th>
					</tr>
				<?php
						while($user = mysql_fetch_row($hasil)){
				?>
					<tr>
						<td><?php echo $user["0"]; ?></td>
						<td><?php echo $user["1"]; ?></td>
						<td><?php echo $user["2"]; ?></td>
						<td><?php echo $user["3"]; ?></td>
						<td><?php echo $user["4"]; ?></td>
						<td><?php echo $user["5"]; ?></td>
					</tr>
				<?php
						}
				?>
				</table>
				<?php
			}
		?>
		<a href="pesan.php">Pesan Barang Baru</a>
	</body>
</html>