<div class="row" style="margin-bottom:15%;">
			<div class="mainContent">
				<div class="large-6 columns"><h3 class="forumTitle"><?php echo $article['infoTitle'] ?></h3></div>
				<div class="large-12 columns">
					<div class="news_box">
						<p>
							<?php echo $article['infoContent']; ?>
						</p>
						<div class="news_data">Posted on: <span class="news_date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("g:i a F j, Y ",strtotime($article['timestamp'])) ?></span></div><br>
					</div>
				</div>
			</div>
		</div>