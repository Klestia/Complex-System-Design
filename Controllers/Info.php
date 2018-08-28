<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class Info extends ControllerClass{
		function showAll(){
			$info=$this->load_model('infoModel');
			$categories=$info->getInfoCat();
			$threads=array();
			foreach($categories as $key => $category){
				if($key!=='num_rows'){
					$threads[$key]=$info->getSingleCatInfo($category['ID']);
				}
			}
			$data=array(
				'title' => 'Information',
				'cat'	=>	$categories,
				'threads'	=>	$threads
			);
			$this->load_view('header',$data);
			$this->load_view('infoAll',$data);
			$this->load_view('footer',$data);
		}
		function showSingle($arg1){
			if(!is_numeric($arg1)) RouterClass::route('info');
			$info=$this->load_model('infoModel');
			$article=$info->getSingleInfo($arg1);
			if($article['num_rows']!=1)	RouterClass::route('info');
			else{
				$data=array(
					'title' => $article[0]['infoTitle'],
					'article' => $article[0]
				);
				$this->load_view('header',$data);
				$this->load_view('singleInfo',$data);
				$this->load_view('footer',$data);
			}
		}
		function showSearch(){
			if(empty($_POST['searchterms']) || !isset($_POST['searchterms'])) RouterClass::route('info');
			$info=$this->load_model('infoModel');
			$categories=$info->getInfoCat();
			$threads=array();
			foreach($categories as $key => $c){
				if($key!=='num_rows'){
					$threads[$key]=$info->getSearchInfo($_POST['searchterms'],$c['ID']);
				}
			}
			$data=array(
				'title' =>	'News',
				'cat'	=>	$categories,
				'threads'	=> $threads,
				'search'	=>	htmlentities($_POST['searchterms'])
			);
			$this->load_view('header',$data);
			$this->load_view('searchInfo',$data);
			$this->load_view('footer',$data);
		}
	}
 ?>