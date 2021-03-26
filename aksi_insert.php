<?php
 
    $koneksi=mysqli_connect("localhost","root","","perpus") or die("Gagal Koneksi Database");
        $ID_Anggota=$_POST['ID_Anggota']; 
        $nama=$_POST['nama'];
        $jenis_kelamin=$_POST['jenis_kelamin']; 
        $alamat=$_POST['alamat']; 
        $no_hp=$_POST['no_hp']; 
        $email=$_POST['email']; 
        $tgl_entry=$_POST['tgl_entry']; 
        $query="insert into anggota values ('$ID_Anggota','$nama','$jenis_kelamin','$alamat','$no_hp','$email','$tgl_entry')";
 
    $sql=mysqli_query($koneksi,$query) or die("gagal input".$query); 
 
header("location:index.php"); 
?>