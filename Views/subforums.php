<div class="row">
	<div class="mainContent">
		<div class="large-6 columns"><h3 class="forumTitle">Forum</h3></div>
		<table style="border-spacing:0;">
			<thead>
				<tr class="forumHead">
					<th>Title</th>
					<th>Last Activity</th>
				</tr>
			</thead>
			<tbody class="forumBody">
				<?php 
					foreach($subs as $key=>$sub){
						if($key!=='num_rows'){
							echo '<tr class="forumRow">
								<td><a href="'.BASE_URL.'subforum/'.$sub['ID'].'/0" style="color:inherit;"><i class="fa fa-folder-open" aria-hidden="true"></i> '.$sub['subforum_title'].'<br></a></td>';
							echo '<td><span class="threadTitle">';
							if($threads[$key]['num_rows']==0){
								echo 'No Activity</span></td></tr>';
							}	else{
								echo $threads[$key][0]['thread_title'].'</span> <span class="threadTime">'.date("g:i a F j, Y ",strtotime($threads[$key][0]['last_activity'])).'</span></td></tr>';
							}
						}
					}
				?>
			</tbody>
		</table>
	</div>
</div>