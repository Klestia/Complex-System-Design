<div class="row" style="margin-bottom: 20%;">
	<div class="mainContent">
		<div class="large-6 columns"><h3 class="forumTitle">Information</h3></div>
		<div class="large-4 large-offset-2 columns"><input type="text" class="search" placeholder="Search..." name=""></div>
		<?php 
			foreach($cat as $key => $c){
				if($key!=='num_rows'){
					echo '<div class="large-6 columns"><h5 class="categoryTitle">'.$c['category_name'].'</h5>';
					if($threads[$key]['num_rows']==0){
						echo '<h4>No threads of this category matched your search.</h4></div>';
					}	else{
						echo '<ul class="info_list">';
						foreach($threads[$key] as $thread){
							echo '<a href="'.BASE_URL.'info/'.$thread['ID'].'"><li>'.$thread['infoTitle'].'</li></a>';
						}
						echo '	</ul>
							</div>';
					}
					
				}
			}
		?>
	</div>
</div>