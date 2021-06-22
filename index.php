<!DOTYPE html>
<html lang="en">
<?php include ('head.php'); ?>
		

<body>
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">
	<?php include ('nav.php'); ?>
		
		<div id="content">
				
		<!--diapo-->
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
				
					<img src="img/1.png">	
	
	<hr><br>
              <quote>SELAMAT DATANG DI APLIKASI PRODUK KARYA ILMIAH <strong>FAKULTAS ILMU KOMPUTER UNIVERSITAS BOROBUDUR</strong>
			  
			  anda bisa mengakses dan mengunduh berkas Jurnal, Skripsi, Proposal, Karya Ilmiah dan tesis sebagai referensi penelitian disetiap Program Studi.</quote> <br><br>
			

			
			

<footer>
<center>MUHAMMAD FAJAR &copy 081331037 | All Rights Reserved 2019 </center>
</footer>		
	</div><!-- end container --->

</body>

</html>