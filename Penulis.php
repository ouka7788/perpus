<html>
	<body>
			
					<table border="3">
					<h1> Tabel Penulis </h1>
				<tr>
						<th>ID Penulis</th>
						<th>Nama Penulis</th>
						
				</tr>
				<?php
						$query = "select*from penulis";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_Penulis"];?></td>
							<td><?php echo $v["Nama_Penulis"];?></td>
				
						</tr>
						<?php endwhile;?>
					</table>
					
				</body>
			</html>