<div class="row">
	<div class="mainContent">
		<div class="large-6 columns"><h3 class="forumTitle">News</h3></div>
		<div class="large-4 large-offset-2 columns"><form method="post" action="<?php echo BASE_URL.'searchNews'; ?>"><input type="text" class="search" placeholder="Search..." name="searchterms"></form></div>
		<div class="large-12 columns">
		<?php
			if($news['num_rows']==0) echo '<h4>No articles match your searchterms. You searched for \''.$search.'\'.</h4><br><br><br><br><br><br><br><br><br><br><br><br><br>';
			else{
				for($i=0;$i<$news['num_rows'];$i++){
					echo '<div class="news_box">
						<span class="identifier ';
						if($news[$i]['newsType']=='UNICAM') echo 'identifierU">UNICAM</span>';
						else echo 'identifierE">ERSU</span>';
						echo '<h4>'.$news[$i]['newsTitle'].'</h4>
						<p>
							'.substr($news[$i]['newsContent'],0,300).'...<a href="'.BASE_URL.'article/'.$news[$i]['ID'].'">Read More</a>
						</p>
						<div class="news_data">Posted on: <span class="news_date"><i class="fa fa-clock-o" aria-hidden="true"></i> '.date("g:i a F j, Y ",strtotime($news[$i]['timestamp'])).'</div><br>
					</div>';
				}
			}
		 ?>
		</div>
	</div>
</div>