<div class="row">
			<div class="mainContent">
				<span class="identifier 
				<?php 
					if($article['newsType']=='UNICAM') echo 'identifierU">UNICAM</span>';
					else echo 'identifierE">ERSU</span>';
				?>
				<div class="large-6 columns"><h3 class="forumTitle"><?php echo $article['newsTitle']; ?></h3></div>
				<div class="large-12 columns" style="margin-bottom: 20%">
					<div class="news_box">
						<p>
							<?php echo $article['newsContent']; ?>
						</p>
						<div class="news_data">Posted on: <span class="news_date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php
						echo date("g:i a F j, Y ",strtotime($article['timestamp']))?></span></div><br>
					</div>
				</div>
			</div>
		</div>