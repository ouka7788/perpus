<html>
	<body>
			
					<table border="3">
					<h1> Tabel Description </h1>
				<tr>
						<th>ID Description</th>
						<th>Deskripsi</th>
						
				</tr>
				<?php
						$query = "select*from description";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_Description"];?></td>
							<td><?php echo $v["Deskripsi"];?></td>
				
						</tr>
						<?php endwhile;?>
					</table>
					
				</body>
			</html>