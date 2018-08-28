<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class ForumModel extends ModelClass{
		function getSubforums(){
			return $this->do_query('SELECT * FROM subforum ORDER BY subforum_title ASC');
		}
		function getLastActivityForum($id){
			return $this->do_query('SELECT * from threads WHERE threads.subforum_id=\''.$id.'\' ORDER BY threads.last_activity DESC LIMIT 1');
		}
		function getSubforumName($id){
			return $this->do_query('SELECT * FROM subforum WHERE subforum.ID='.$id);
		}
		function getCountThreads($id){
			return $this->do_query('SELECT COUNT(*) AS NUM from threads WHERE threads.subforum_id=\''.$id.'\'');
		}
		function getThreads($id,$num){
			return $this->do_query('SELECT threads.ID,threads.thread_title,threads.subforum_id,threads.user_id,threads.last_activity,users.username,users.ID AS USERID from threads,users WHERE threads.subforum_id=\''.$id.'\' AND users.ID=threads.user_id ORDER BY threads.last_activity DESC LIMIT 5 OFFSET '.($num*5));
		}
		function deleteThread($id){
			return $this->do_query('DELETE FROM threads WHERE threads.ID='.$id);
		}
		function deleteComment($id){
			return $this->do_query('DELETE FROM comments WHERE comments.ID='.$id);
		}
		function createThread($title,$content,$id){
			$this->do_query('INSERT INTO threads(thread_title,thread_content,subforum_id,user_id) VALUES(\''.$title.'\',\''.$content.'\',\''.$id.'\',\''.SessionClass::$instance->ID.'\')');
		}
		function getSingleThread($id){
			return $this->do_query('SELECT threads.ID,threads.thread_content,threads.thread_title,threads.subforum_id,threads.user_id,threads.last_activity,users.username,users.ID AS USERID FROM threads,users WHERE threads.ID='.$id.' AND users.ID=threads.user_id');
		}
		function getCommentCount($id){
			return $this->do_query('SELECT COUNT(*) AS NUM from comments WHERE comments.thread_FK=\''.$id.'\'');
		}
		function getComments($id,$num){
			return $this->do_query('SELECT comments.ID,comments.comment_content,comments.user_FK,comments.last_activity,comments.last_activity,users.username,users.ID AS USERID from comments,users WHERE comments.thread_FK=\''.$id.'\' AND users.ID=comments.user_FK ORDER BY comments.last_activity ASC LIMIT 4 OFFSET '.($num*4));
		}
		function createComment($content,$id){
			$this->do_query('INSERT INTO comments(comment_content,thread_FK,user_FK) VALUES(\''.$content.'\',\''.$id.'\',\''.SessionClass::$instance->ID.'\')');
		}
	}
?>