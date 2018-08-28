<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class News extends ControllerClass{
		private $total;
		private $news;
		function __construct(){
			$this->news=$this->load_model('newsModel');
			$this->total=$this->news->numTotal();
			$this->total=$this->total[0]['NUM'];
		}
		function showall($arg1){
			if(!is_numeric($arg1) || $arg1>($this->total/4)) RouterClass::route('news/0');
			$data=array(
				'title' => 'News',
				'news'	=>	$this->news->getpage($arg1),
				'totalNum'	=>	$this->total,
				'current'	=>	$arg1
			);
			$this->load_view('header',$data);
			$this->load_view('news',$data);
			$this->load_view('footer',$data);
		}
		function showsingle($arg1){
			if(!is_numeric($arg1)) RouterClass::route('news/0');
			$article=$this->news->getSingleNews($arg1);
			if($article['num_rows']!=1)	RouterClass::route('news/0');
			else{
				$data=array(
					'title' => $article[0]['newsTitle'],
					'article' => $article[0]
				);
				$this->load_view('header',$data);
				$this->load_view('article',$data);
				$this->load_view('footer',$data);
			}
		}
		function searchNews(){
			if(empty($_POST['searchterms']) || !isset($_POST['searchterms'])) RouterClass::route('news/0');
			$articles=$this->news->getSearchNews($_POST['searchterms']);
			$data=array(
				'title' =>	'News',
				'news'	=>	$articles,
				'search'	=>	htmlentities($_POST['searchterms'])
			);
			$this->load_view('header',$data);
			$this->load_view('searchNews',$data);
			$this->load_view('footer',$data);
		}
	}
 ?>