<!DOTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>APLIKASI PRODUK KARYA ILMIAH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>

	
	<?php include ("dbconn.php");?>
	<?php $get_id = $_GET['id']; ?>
</head>


<body>
	
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">
	<?php include ("nav.php");?>
			<div id="content">
				
		
		  <div id="rightcont">
		  <div style="margin-top:-0px;" class="searchform3">
				<?php
			$query=mysql_query("SELECT * FROM research where research_id = '$get_id'") or die (mysql_error());
			while ($r_row=mysql_fetch_array($query)){
			$r_id=$r_row['research_id'];
			$doc=$r_row['document'];
			
			?>
				
				<div class="topviewtab"><?php echo $r_row['research_title'];?></div>
				<div class='blue'><?php echo $r_row['status'];?></div>
				

				
				<center>
				<strong><br><font style="font:Bold 26px 'Times New Roman';"><?php echo $r_row['status'];?></strong></font> <br><br>
				<img src="images/logo.jpg" style="width:200px; height:200px;"><br> <br />
				<strong>Oleh:<br><font style="font:bold 20px 'Times New Roman';"><?php echo $r_row['peneliti']; ?></font><br><br>
				</strong><br><font style="font:bold 26px 'Times New Roman';">PROGRAM STUDI <?php echo $r_row['category']; ?></font><br>
				</strong><br><font style="font:bold 26px 'Times New Roman';">FAKULTAS <?php echo $r_row['fakultas']; ?></font><br>
				</strong><br><font style="font:bold 26px 'Times New Roman';"><?php echo $r_row['location']; ?></font><br>
				</strong><br><font style="font:bold 26px 'Times New Roman';"><?php echo $r_row['copyright_year']; ?></font><hr></center>
				<center><strong style="font:bold 15px 'Arial';">Abstrak:</strong><br><br>
				<?php echo $r_row['research_summary']; ?></center><br>
			
			<div class="pull-left">
				<strong><div class="topviewtab2">DOWNLOAD : <a href="document/<?php  echo $doc;?>" target="blank"><?php echo $r_row['research_title']; }?></a></div>  </strong><hr>

				<?php 
				$research_query=mysql_query
				("select author.author_id , author.firstname  , author.middlename  , author.lastname, author.image,
				author_has_research.author_id   from author  , author_has_research
				where author_has_research.research_id = '$r_id' and author.author_id = author_has_research.research_id
				OR author_has_research.research_id = '$r_id' and author.author_id = author_has_research.author_id") or die (mysql_error());
				while ($a_row=mysql_fetch_array($research_query))
				{
				$a_id=$a_row['author_id'];
				?>		
				<a href="view_author_profile.php?id=<?php echo $a_id; ?>" class="pict"><img src="admin/<?php echo $a_row['image'];?>" class="img-polaroid" style="width:80px; height:60px;"><br> <?php echo $a_row['firstname']." ".$a_row['middlename']." ".$a_row['lastname'] ;?></a>
			
		
		
		
								<font color="#000"><h3><?php echo $ann_row['title'];?></h3>
								<?php echo $ann_row['content'];?></font>
								<br>
								<div style="color:#000;" class="pull-right"><?php echo $ann_row['date'];?></div>
								<br>
							<?php } ?>
							</div>
			</div>
			</div>
				<script SRC="js/jquery.tools.min.js"></script>
<script type="text/javascript" language="javascript" src="administrator/media/js/jquery.dataTables.js"></script>
<link rel='stylesheet' id='style-css'  href='scripts/diapo.css' type='text/css' media='all' /> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 
		
		
		<div id="sidebar" >
			<div class="serts">
							<form method="post" action="search.php"><br>
							<div style="font:bold 15px 'arial';">Seach Here: </div>
								<input class="serts" style="padding:10px;" type="search" name="search" placeholder="Cari Judul, Tahun, Program Studi.......">
							</form>
					</div>
					<div class="text-right" style="margin-top: -23px;">
					
					
					
					<font style=" color:darkblue; font:bold 24px 'cambria';">Teknik Informatika</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
							
								<?php
								$r_query = mysql_query("select * from research where category = 'TEKNIK INFORMATIKA' and status != 'Archive' ORDER BY rand() LIMIT 5")or die(mysql_error());
								while($r_row=mysql_fetch_array($r_query)){
								$r_id = $r_row['research_id'];
								?>
									<div style="margin:8px;">	
									<i class="icon-book icon-large"></i> <a style ="color:#000; font-size:16px; line-height:25px;" href="view_research.php?id=<?php echo $r_id; ?>"><?php echo $r_row['research_title']; ?></a><br>
									</div>
							
								<?php } ?>
								<div class="line-block"></div>
								<font style=" color:darkblue; font:bold 24px 'cambria';">S1 Manajemen</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
								<?php
								$r_query = mysql_query("select * from research where category = 'S1 MANAJEMEN' and status != 'Archive' ORDER BY rand() LIMIT 5")or die(mysql_error());
								while($r_row=mysql_fetch_array($r_query)){
								$r_id = $r_row['research_id'];
								?>
									<div style="margin:8px;">
									<div class="ellipsis-text"> <i class="icon-book icon-large"></i> <a style ="color:#000; font-size:16px; line-height:25px;" href="view_research.php?id=<?php echo $r_id; ?>"><?php echo $r_row['research_title']; ?></a><br>
									</div></div>
							
								<?php } ?>
					</div>
					<br><br>
						<div class="text-right"  style="margin-top: -23px;">
					
						<font style=" color:darkblue; font:bold 24px 'cambria';">Author Overview</font><hr style="margin:8px; border-bottom:1px solid #ccc;">

								<?php
								$a_query = mysql_query("select * from author ORDER BY rand() LIMIT 6")or die(mysql_error());
								while($a_row=mysql_fetch_array($a_query)){
								$a_id = $a_row['author_id'];
								?>
									<script type="text/javascript">
											$(document).ready(function(){                                     
                                            $('#<?php echo $a_id; ?>').tooltip('show')
                                            $('#<?php echo $a_id; ?>').tooltip('hide')
                                        });
                                    </script>
												
								<a style ="color:blue; border-bottom:1px solid #aaa; font-size:16px; line-height:25px;" href="view_author_profile.php?id=<?php echo $a_id; ?>">
								<img class="img-polaroid" rel="tooltip"  data-placement="bottom"  title="<?php echo $a_row['firstname']." ".$a_row['middlename']." ".$a_row['lastname']; ?>" id="<?php echo $a_id; ?>" src="admin/<?php echo $a_row['image']; ?>" style="width:110px; height:80px; padding:5px;">
								</a>
								
								<?php } ?>
								<br>
							
		
			
							
					</div>
					
	
				
										

			</div>
<footer>
<center>MUHAMMAD FAJAR &copy 081331037 | All Rights Reserved 2016 </center>
</footer>		

		</div><!-- end content --->
		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>