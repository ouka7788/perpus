<?php
    $koneksi=mysqli_connect("localhost","root","","perpus") or die("GagalKoneksi Database");
    $ID_Anggota=$_GET['ID_Anggota']; 
    $query="delete from anggota where ID_Anggota='$ID_Anggota'";
    $sql=mysqli_query($koneksi,$query) or die("gagal input".$query); 
    header("location:index.php"); 
?>
