<!DOTYPE html>
<html lang="en">
<head>

<?php include ("dbconn.php"); ?>
	<meta charset="utf-8">
	<title>APLIKASI PRODUK KARYA ILMIAH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 



	
	<!-- Evo slider-->
 
	
	<!-- Evo slider-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <link href="css/style_1.css" rel="stylesheet" media="screen">
  
	<link rel="Stylesheet" type="text/css" href="css/default/reset.css" />
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
    <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script>   
	        
	<style>
		body{
		background:#E9EAED;
		}
		
	</style>
</head>
		

<body>
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">
	<?php include ("nav.php"); ?>
				
		<div class="alert alert-success">
			<strong>WELCOME</strong> TO PRODUK KARYA ILMIAH
				<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
			</div>
			</div>
			
			<div class="searchform1">
			
			<font style=" color:darkblue; font:bold 24px 'cambria';"> 
						<i class="icon icon-exclamation"></i> Tentang Kami</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
						
             Aplikasi ini bertujuan untuk penilitian merancang sebuah website sistem informasi berupa portal PRODUK KARYA ILMIAH pada fakultas ilmu 		             komputer universitas untuk mempermudah mahasiswa memperoleh informasi tentang produk-produk karya ilmiah.
				
				</div><!--end of searchform1-->
				
				

<footer>
<center>MUHAMMAD FAJAR &copy 081331037 | All Rights Reserved 2019 </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>