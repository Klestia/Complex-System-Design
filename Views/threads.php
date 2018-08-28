<div class="row">
			<div class="mainContent">
				<div class="large-6 columns"><h3 class="forumTitle"><?php echo $title; ?></h3></div>
				<div class="large-6 columns">
				<?php 
					if(isset(SessionClass::$instance->loggedIn)) echo '<button class="button createThread" data-open="createModal">Create Thread</button>';
				 ?>
				 </div>
				<table style="border-spacing:0;">
					<thead>
						<tr class="forumHead">
							<th>Title</th>
							<th>Posted By</th>
							<th>Last Activity</th>
						</tr>
					</thead>
					<tbody class="forumBody">
						<?php
							if($threads['num_rows']==0) echo '<tr class="forumRow"><td><h4>No Threads Yet</h4></td><td></td><td></td></tr>';
							else{
								foreach($threads as $key => $thread){
									if($key!=='num_rows'){
										echo '<tr class="forumRow"><td><a href="'.BASE_URL.'thread/'.$thread['ID'].'/0" style="color:inherit;">';
										echo '<i class="fa fa-file" aria-hidden="true"></i> '.$thread['thread_title'].'<br></a>';
										echo '<span class="threadControls">';
										if(SessionClass::$instance->admin=='YES' || SessionClass::$instance->ID==$thread['user_id'])	echo '<button class="deleteThread" onclick="deleteFunction(this,'.$thread['ID'].')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>';
										echo '</span></td><td><span class="threadTitle"><i class="fa fa-user-circle" aria-hidden="true"> '.$thread['username'].'</span></td><td><span class="threadTime">'.date("g:i a F j, Y ",strtotime($thread['last_activity'])).'</span></td></tr>';
									}
								}
							}
							
						?>
					</tbody>
				</table>

				<div class="link_refs large-12 columns">
					<?php 
						$total=($count/5);
						if($current>0)	echo '<a href="'.BASE_URL.'subforum/'.$subforumID.'/'.($current-1).'" class="button"><<</a>';
						if($total<10)	for($i=0;$i<$total;$i++){
							if($current==$i) echo '<a href="'.BASE_URL.'subforum/'.$subforumID.'/'.$i.'" class="button alert">'.($i+1).'</a>';
							else echo '<a href="'.BASE_URL.'subforum/'.$subforumID.'/'.$i.'" class="button">'.($i+1).'</a>';
						}
						if($current<$total-1) echo '<a href="'.BASE_URL.'subforum/'.$subforumID.'/'.($current+1).'" class="button">>></a>';
					 ?>
				</div>

			</div>
		</div>

		<div class="reveal" id="exampleModal2" data-reveal>
			<form action="<?php echo BASE_URL; ?>deleteThread" method="post">
				<h3>Are you sure you want to delete this thread?</h3>
				<input type="hidden" id="crazyinput" name="threadID">
				<input type="submit" class="button alert" value="Yes" name="">
				<button type="button" class="button SUCCESSADMIN" style="float:right;" onclick="$('#exampleModal2').foundation('close');">No</button>
			</form>
		</div>

		<div class="reveal" id="createModal" data-reveal>
			<form action="<?php echo BASE_URL; ?>createThread" method="post">
				<div class="large-12 columns">
					<label>
						Insert thread title
						<input type="text" name="title">
					</label>
				</div>
				<div class="large-12 columns">
					<label>
						Insert thread content
						<textarea name="content"></textarea>
					</label>
				</div>
				<input type="hidden" name="subforumID" value="<?php echo $subforumID; ?>">
				<button type="button" class="button alert" style="float:right;" onclick="$('#createModal').foundation.('close');">Cancel</button>
				<input type="submit" class="button SUCCESSADMIN" value="Create Thread" name="">
			</form>
		</div>
		<script type="text/javascript">
			function deleteFunction(element,id){
				$('#crazyinput').val(id);
				$('#exampleModal2').foundation('open');
			}
		</script>