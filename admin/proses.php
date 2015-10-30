<?php
$username=$_POST['user'];
$password=$_POST['pass'];
			if($username=="admin" || $username=="Admin" && $password=="admin" || $password=="admin")
			{
				header('location:admin.php');
			}else if($username=="koperasi" || $username=="Koperasi" && $password=="koperasi" || $password=="Koperasi")
			{
				header('location:koperasi.php');
			}else if($username=="anggota" || $username=="Anggota" && $password=="Anggota" || $password=="anggota")
			{
				header('location:user.php');
			}else{
			header('location:login.php?err=error');
			}
?>