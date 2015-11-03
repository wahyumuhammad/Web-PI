﻿<!DOCTYPE html>
<?php

	$username=$_POST['user'];
	$password=$_POST['pass'];
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GKBI | Gabungan Koperasi Batik Indonesia</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
		<!-- Menu -->
          <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="assets/img/find_user.png" class="user-image img-responsive"/>
						<?php echo "<h2>$username</h2>"; ?>
					</li>

		<?php
			if($username=="admin" || $username=="Admin" && $password=="admin" || $password=="admin")
			{
				include_once "inc/menuAdmin.php";
			}else if($username=="koperasi" || $username=="Koperasi" && $password=="koperasi" || $password=="Koperasi")
			{
				include_once "inc/menuKoperasi.php";
			}else if($username=="anggota" || $username=="Anggota" && $password=="Anggota" || $password=="anggota")
			{
				include_once "inc/menuUser.php";
				}
			?>
	
           <!-- /. NAV TOP  -->
		<?php

		$menu=$_GET['p'];
			switch($menu){
				case 'tentang':
					include "tentang.php";
					break;
				case 'anggota':
					include "anggota.php";
					break;
				default :
					include "home.php";
					break;
			}
		?>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
