<html>
	<body>
		
					<table border="3">
					<h1> Tabel Transaksi</h1>
				<tr>
						<th>ID Transaksi</th>
						<th>Tanggal Pinjaman</th>
						<th>Tanggal Kembali</th>
						<th>ID  Buku</th>
						<th>ID Anggota</th>
					
				</tr>
				<?php
						$query = "select*from transaksi";
						$koneksi = mysqli_connect("localhost", "root", "", "perpus");
						$data = mysqli_query($koneksi,$query)or die("Gagal query:".$query);
						?>
						<?php while($v=mysqli_fetch_array($data)):;?>
						<tr>
							<td><?php echo $v["Id_Transakasi"];?></td>
							<td><?php echo $v["Tanggal_Pinjam"];?></td>
							<td><?php echo $v["Tanggal_Kembali"];?></td>
							<td><?php echo $v["Id_Buku"];?></td>
							<td><?php echo $v["id_anggota"];?></td>
						
						</tr>
						<?php endwhile;?>
					</table>
				</body>
			</html>