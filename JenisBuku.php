<html>
	<body>

					<table border="3">
					<h1> Tabel Jenis_Buku </h1>
				<tr>
						<th>ID Jenis</th>
						<th>Jenis</th>
						
				</tr>
				<?php
						$query = "select*from jenis_buku";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_jenis"];?></td>
							<td><?php echo $v["Jenis"];?></td>
				
						</tr>
						<?php endwhile;?>
					</table>
					
				</body>
			</html>