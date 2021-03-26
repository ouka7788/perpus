<?php
  $koneksi=mysqli_connect("localhost","root","","perpus") or die("Gagal Koneksi Database");
  echo "Sukses Koneksi database";
?>
<html>
	<body>
		<h1>TABEL ANGGOTA</h1>
		<table border="3"> 
			<tr>
				<th>ID Anggota</th> 
				<th>Nama</th> 
				<th>Jenis Kelamin</th> 
				<th>Alamat</th> 
				<th>No HP</th> 
				<th>Email</th> 
				<th>Tanggal Entry</th>
				<th>Aksi</th> 
			</tr>
			<?php
				$query="select * from anggota";
				$data=mysqli_query($koneksi,$query) or die ("Gagal query:".$query);
			?> 
			<?php while($v=mysqli_fetch_array($data)):;?> 
			<tr> 
				<td><?php echo $v["ID_Anggota"];?></td> 
				<td><?php echo $v["Nama"];?></td> 
				<td><?php echo $v["Jenis_Kelamin"];?></td> 
				<td><?php echo $v["Alamat"];?></td> 
				<td><?php echo $v["No_HP"];?></td> 
				<td><?php echo $v["Email"];?></td> 
				<td><?php echo $v["Tgl_Entry"];?></td> 
				<td>
				<a href="aksi_hapus.php?ID_Anggota=<?php echo $v["ID_Anggota"];?>">Hapus </a> &nbsp;
				<a href="formupdate.php?ID_Anggota=<?php echo $v["ID_Anggota"];?>">Edit </a> &nbsp; 
				</td>
			</tr> 
			<?php endwhile;?> 
		</table>
		<table>
		<a href="inputdata.php">Masukan Data</a>
		</table> 
	</body> 
</html>