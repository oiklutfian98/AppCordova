<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kode=$_POST['kode'];
 $nim=$_POST['nim'];
 $matakuliah=$_POST['matakuliah'];
 $kpkl=$_POST['kpkl'];
 $khs=$_POST['khs'];
 $dosenp=$_POST['dosenp'];
 $q=mysqli_query($con,"UPDATE `nilai` SET `kode`='$kode',`nim`='$nim',`matakuliah`='$matakuliah',`kpkl`='$kpkl',`khs`='$khs',`dosenp`='$dosenp' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>