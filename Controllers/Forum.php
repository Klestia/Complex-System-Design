<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class Forum extends ControllerClass{
		function showSubForums(){
			$subforum=$this->load_model('forumModel');
			$subforums=$subforum->getSubforums();
			$threads=array();
			foreach($subforums as $key => $array){
				if($key!=='num_rows'){
					$threads[$key]=$subforum->getLastActivityForum($array['ID']);
				}
			}
			$data=array(
				'title' => 'Forum',
				'subs'	=>	$subforums,
				'threads'	=> $threads
			);
			$this->load_view('header',$data);
			$this->load_view('subforums',$data);
			$this->load_view('footer',$data);
		}
		function showThreads($arg1,$arg2){
			if(!is_numeric($arg1) || !is_numeric($arg2)) RouterClass::route('forum');
			$model=$this->load_model('forumModel');
			$title=$model->getSubforumName($arg1);
			if($title['num_rows']==0)	RouterClass::route('forum');
			$count=$model->getCountThreads($arg1);
			$count=$count[0]['NUM'];
			if(($arg2>($count/5) && $count!=0) || $arg2<0)	RouterClass::route('forum');
			$threads=$model->getThreads($arg1,$arg2);

			$data=array(
				'title' => 	$title[0]['subforum_title'],
				'count'	=>	$count,
				'threads'	=>	$threads,
				'current'	=> 	$arg2,
				'subforumID'	=> $arg1

			);
			$this->load_view('header',$data);
			$this->load_view('threads',$data);
			$this->load_view('footer',$data);
		}
		function showComments($arg1,$arg2){
			if(!is_numeric($arg1) || !is_numeric($arg2)) RouterClass::route('forum');
			$model=$this->load_model('forumModel');
			$thread=$model->getSingleThread($arg1);
			$count=$model->getCommentCount($arg1);
			$count=$count[0]['NUM'];

			if(($arg2>($count/4) && $count!=0) || $arg2<0)	RouterClass::route('forum');

			$comments=$model->getComments($arg1,$arg2);

			$data=array(
				'title' => 	$thread[0]['thread_title'],
				'thread'	=>	$thread,
				'count'	=>	$count,
				'current'	=>	$arg2,
				'comments'	=>	$comments
			);
			$this->load_view('header',$data);
			$this->load_view('singleThread',$data);
			$this->load_view('footer',$data);
		}
		function deleteThread(){
			if(empty($_POST['threadID']) || !isset($_POST['threadID']) || !is_numeric($_POST['threadID']))	RouterClass::route('forum');
			else{
				$model=$this->load_model('forumModel');
				$model->deleteThread($_POST['threadID']);
				RouterClass::route('forum');
			}
		}
		function createThread(){
			if(empty($_POST['title']) || !isset($_POST['title']) || empty($_POST['content']) || !isset($_POST['content'])) RouterClass::route('forum');
			else{
				$model=$this->load_model('forumModel');
				$model->createThread($_POST['title'],$_POST['content'],$_POST['subforumID']);
				RouterClass::route('forum');
			}
		}
		function deleteComment(){
			if(empty($_POST['commentID']) || !isset($_POST['commentID']) || !is_numeric($_POST['commentID']))	RouterClass::route('forum');
			else{
				$model=$this->load_model('forumModel');
				$model->deleteComment($_POST['commentID']);
				RouterClass::route('forum');
			}
		}
		function createComment(){
			if(empty($_POST['content']) || !isset($_POST['content'])) RouterClass::route('forum');
			else{
				$model=$this->load_model('forumModel');
				$model->createComment($_POST['content'],$_POST['threadID']);
				RouterClass::route('forum');
			}
		}
	}
 ?>