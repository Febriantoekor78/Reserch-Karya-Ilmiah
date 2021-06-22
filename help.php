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
			<strong>WELCOME</strong> TO APLIKASI PRODUK KARYA ILMIAH
				<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
			</div>
			</div>
	<div class="content-left">
		<font style=" color:darkblue; font:bold 24px 'cambria';">
						<i class="icon icon-exclamation"></i> Bantuan</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
							<div class="serts">
							<form method="post" action="search.php"><br>
							<div style="font:bold 15px 'arial';">Apa yang anda cari? </div>
								<input class="serts" type="search" name="search" style="text-align:center;" placeholder="Search by Title, Year, Author.......">
							</form>
					</div>
					<div class="text">
						  Disini anda dapat menemukan Jurnal, Karya Ilmiah, Skripsi dan Tesis dengan mudah. <br>
					
						  Anda bisa mengetikan kata atau prase di kolom pencarian kemudian enter, <br>atau anda bisa mencari berdasarkan Judul, Author, Tahun atau Program Studi.
						<br>
						<br>
					<font style=" color:#000; font:bold 24px 'cambria';">
						<i class="icon icon-exclamation"></i> " Judul "</font>	<br>
						Anda bisa mencari dokumen berdasarkan judul misalnya:<br>
					<strong>Sistem Pakar Tanaman Padi</strong><br>
					atau hanya sebagian dari judul misalnya: <br>
					<strong>Sistem Pakar, Rancang Bangun</strong>
					
										
											<br>
											<br>
										<font style=" color:#000; font:bold 24px 'cambria';">
											<i class="icon icon-exclamation"></i> " Program Studi "</font>	<br>
											Anda juga bisa mencari berdasarkan program studi pilihan, misalnya:<br>
					<strong>Teknik, Informatika, Hukum</strong><br>
					atau dengan memasukkan tahun penerbitan penelitian:<br> 
					<strong>2015, 2016, 2017</strong>
										
											</div><br>
</div>



				
				
	
	
		
		
		
		
	
	
		
		

<footer>
<center>MUHAMMAD FAJAR &copy 081331037| All Rights Reserved 2019 </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>