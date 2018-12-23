<?php
include('alheader.php');
include('banner_inside.php');
include('connection.php');
?>
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<?php
					    $sel="select * from videos";
        				$res_sel=$conn->query($sel);	
        				while($r=$res_sel->fetch_object())
        				{
        				?>
				<div class="vide">
				<iframe src="../../../video/<?php echo $r->vname;?>" width="100%" height="290" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h3><a href="singlepage.html"> <?php echo $r->videotitle; ?></a></h3>
						<p><?php echo $r->videodesc; ?></p>
						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $r->posteddate; ?></li>
							</ul>
						</div>
			</div>
			<?php
		}
		?>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
		</div>
		</div>
		<?php
		
			include('footer.php')
		?>