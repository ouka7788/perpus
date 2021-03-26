<html>
	<body>	
					<table border="3">
					<h1> Tabel Buku </h1>
				<tr>
						<th>ID Buku</th>
						<th>Judul Buku</th>
						<th>ID Jenis</th>
						<th>ID Penulis</th>
						<th>ID Penerbit</th>
						<th>ID Description</th>
						
				</tr>
				<?php
						$query = "select*from buku";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_Buku"];?></td>
							<td><?php echo $v["Judul_Buku"];?></td>
							<td><?php echo $v["Id_Jenis"];?></td>
							<td><?php echo $v["Id_penulis"];?></td>
							<td><?php echo $v["Id_penerbit"];?></td>
							<td><?php echo $v["Id_Description"];?></td>
						</tr>
						<?php endwhile;?>
					</table>
				</body>
			</html>