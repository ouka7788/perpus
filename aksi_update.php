<?php
    $koneksi=mysqli_connect("localhost","root","","perpus") or die("Gagal Koneksi Database");
    $ID_Anggota=$_POST['ID_Anggota']; 
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin']; 
    $alamat=$_POST['alamat']; 
    $no_hp=$_POST['no_hp']; 
    $email=$_POST['email']; 
    $tgl_entry=$_POST['tgl_entry']; 
    $query="update anggota set Nama='$nama', Jenis_Kelamin='$jenis_kelamin',Alamat='$alamat', No_HP='$no_hp', Email='$email',Tgl_Entry='$tgl_entry' where ID_Anggota='$ID_Anggota'";
    $sql=mysqli_query($koneksi,$query) or die("gagal ubah".$query); 
 
header("location:index.php");  
?> 