<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kode=$_POST['kode'];
 $nim=$_POST['nim'];
 $matakuliah=$_POST['matakuliah'];
 $kpkl=$_POST['kpkl'];
 $khs=$_POST['khs'];
 $dosenp=$_POST['dosenp'];
 $q=mysqli_query($con,"INSERT INTO `nilai` (`kode`,`nim`,`matakuliah`,`kpkl`,`khs`,`dosenp`) VALUES ('$kode','$nim','$matakuliah','$kpkl','$khs','$dosenp')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>