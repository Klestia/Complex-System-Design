<div class="row">
			<div class="mainContent">
				<div class="large-6 columns"><h3 class="forumTitle"><?php echo $title; ?></h3></div>
				<div class="large-12 columns" style="margin-bottom: 20px;">
					<p>
						<?php echo $thread[0]['thread_content']; ?>
					</p>
					<span class="timeStamp"><?php echo date("g:i a F j, Y ",strtotime($thread[0]['last_activity']));?></span>
					<span class="postedBy">Posted by: <i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $thread[0]['username']; ?></span>
					<span class="threadControls">
						<button class="deleteThread" onclick="deleteFunction(this,<?php echo $thread[0]['ID']; ?>)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
					</span>
				</div>
				<table>
					<thead>
						<tr class="forumHead">
							<th width="200">Comment By</th>
							<th style="text-align: center !important;">Content</th>
						</tr>
					</thead>
					<tbody class="forumBody">
						<?php 
							if($comments['num_rows'] == 0) echo '<tr class="forumRow">
							<td><h3>No Comments Yet</h3></td><td></td></tr>';
							else{
								foreach($comments as $key => $comment){
									if($key!=='num_rows'){
										echo '<tr class="forumRow">
												<td>
													<span class="threadTitle"><i class="fa fa-user-circle" aria-hidden="true"></i> '.$comment['username'].'</span>
													<br>
													<span class="threadTime">'.date("g:i a F j, Y ",strtotime($comment['last_activity'])).'</span>
												</td><td class="commentContent">
													'.$comment['comment_content'].'
													<br>
													<span class="commentControls">';

													if(SessionClass::$instance->admin=='YES' || $comment['USERID']==SessionClass::$instance->ID) echo'<button class="deleteThread" onclick="deleteComment(this,'.$comment['ID'].')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>';
													echo '
													</span>
												</td>
											</tr>';
									}
								}
							}
							
						?>
					</tbody>
				</table>

				<div class="link_refs large-12 columns">
					<?php 
						$total=($count/4);
						if($current>0)	echo '<a href="'.BASE_URL.'thread/'.$thread[0]['ID'].'/'.($current-1).'" class="button"><<</a>';
						if($total<10)	for($i=0;$i<$total;$i++){
							if($current==$i) echo '<a href="'.BASE_URL.'thread/'.$thread[0]['ID'].'/'.$i.'" class="button alert">'.($i+1).'</a>';
							else echo '<a href="'.BASE_URL.'thread/'.$thread[0]['ID'].'/'.$i.'" class="button">'.($i+1).'</a>';
						}
						if($current<$total-1) echo '<a href="'.BASE_URL.'thread/'.$thread[0]['ID'].'/'.($current+1).'" class="button">>></a>';
					 ?>
				</div>

				<div class="replyBox large-12 columns">
					<?php 
						if(!isset(SessionClass::$instance->loggedIn)) echo 'You have to be logged in to comment.';
						else{
							echo '<h5>Comment below:</h5>
									<form method="post" action="'.BASE_URL.'createComment">
										<input type="hidden" name="threadID" value="'.$thread[0]['ID'].'">
										<textarea name="content"></textarea>
										<input type="submit" class="button commentPost" value="Post" name="">
									</form>';
						}
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
		<div class="reveal" id="exampleModal3" data-reveal>
			<form action="<?php echo BASE_URL; ?>deleteComment" method="post">
				<h3>Are you sure you want to delete this comment?</h3>
				<input type="hidden" id="crazyinput1" name="commentID">
				<input type="submit" class="button alert" value="Yes" name="">
				<button type="button" class="button SUCCESSADMIN" style="float:right;" onclick="$('#exampleModal3').foundation('close');">No</button>
			</form>
		</div>

		<script type="text/javascript">
			function deleteFunction(element,id){
				$('#crazyinput').val(id);
				$('#exampleModal2').foundation('open');
			}
			function deleteComment(element,id){
				$('#crazyinput1').val(id);
				$('#exampleModal3').foundation('open');
			}
		</script>
