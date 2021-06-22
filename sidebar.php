		
		
		<script SRC="js/jquery.tools.min.js"></script>
<script type="text/javascript" language="javascript" src="administrator/media/js/jquery.dataTables.js"></script>
<link rel='stylesheet' id='style-css'  href='scripts/diapo.css' type='text/css' media='all' /> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 
		
		<div id="sidebar">
		
	
		
					<div class="serts">
							<form method="post" action="search.php">
							<div style="font:bold 15px 'arial';">Seach Here: </div>
								<input class="serts" style="padding:10px;" type="search" name="search" placeholder="Cari Judul, Program Studi, Tahun, Author.......">
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
								$r_query = mysql_query("select * from research where category = 'S1 Manajemen' and status != 'Archive' ORDER BY rand() LIMIT 5")or die(mysql_error());
								while($r_row=mysql_fetch_array($r_query)){
								$r_id = $r_row['research_id'];
								?>
									<div style="margin:8px;">
									<div class="ellipsis-text"> <i class="icon-book icon-large"></i> <a style ="color:#000; font-size:16px; line-height:25px;" href="view_research.php?id=<?php echo $r_id; ?>"><?php echo $r_row['research_title']; ?></a><br>
									</div></div>
							
								<?php } ?>
					</div>
					
			
					<br>
						

									<?php include ("slide.php"); ?>	

							
					
							
							
				</div>