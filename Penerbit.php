<html>
	<body>
			
					<table border="3">
					<h1> Tabel Penerbit </h1>
				<tr>
						<th>ID Penerbit</th>
						<th>Nama Penerbit</th>
						
				</tr>
				<?php
						$query = "select*from penerbit";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_Penerbit"];?></td>
							<td><?php echo $v["Nama_Penerbit"];?></td>
				
						</tr>
						<?php endwhile;?>
					</table>
					
				</body>
			</html>