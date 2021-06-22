<!DOTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>APLIKASI PRODUK KARYA ILMIAH</title>	
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="admin/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="admin/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<script src="admin/js/jquery.js" type="text/javascript"></script>
	<script src="admin/js/bootstrap.js" type="text/javascript"></script>


	<!-- Data Table -->
<!--  <link href="datatable/style1.css" rel="stylesheet" type="text/css"> -->
<!-- <script type="text/javascript" src="datatable/jquery-1.6.js" charset="utf-8" ></script> -->
<link href="admin/datatable/demo_table_jui.css" rel="stylesheet" type="text/css"/> 
<link href="admin/datatable/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" language="javascript" src="admin/datatable/jquery.dataTables.js"></script>
<script type="text/javascript" >
		 	jQuery(document).ready(function() {
				oTable = jQuery('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			}); 
		</script>
		

	 

	

	
	<?php include ("dbconn.php");?>
	
	<style>
	body{
	background:#E9EAED;
	}
	</style>
</head>


<body>
		
		<div id="container">
		<img src="images/banner.jpg" class="banner">
		<?php include ("nav.php");?>
			
		<div id="content">
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
				
		
			<center>	<h2><i class="icon-large icon-question-sign"></i> Apa yang baru ?</h2> </center>
			
				
	<!-- table -->
<div class="above_table">
<br>
	<div class="demo_jui1">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
			<thead>
				<tr>
					
							<th>Judul penelitian</th>
							<th>Program Studi</th>
							<th>Kategori</th>
							<th>Tahun</th>
							<th>Lokasi</th>
							<th>Peneliti</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
	
	$query = mysql_query("select * from research order by research_title DESC LIMIT 10");
	$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
	if ($count > 0){ 
	$r_id = $row['research_id'];
	?>
	
				
						<tr>
							<td><a href="view_research.php?id=<?php echo $r_id; ?>"><?php echo $row['research_title'];?></a></td>
							<td><?php echo $row['category'];?></td>
							<td><?php echo $row['status'];?></td>
								<td><?php echo $row['copyright_year'];?></td>
								<td><?php echo $row['location'];?></td>
								<td><?php echo $row['peneliti'];?></td>
						

						</tr>
						<?php }

		elseif ($count == 0)
		{
			echo 'No Data Available';
		}
		else
		{
		
		}}

						?>		
					</tbody>
		
  
		</table>
		
	</div>
	</div>
			
				
				
				
				
				
		</div><!-- end content --->
		<footer>
<center>MUHAMMAD FAJAR &copy 081331037 | All Rights Reserved 2019 </center>
</footer>
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>