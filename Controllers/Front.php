<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');
	
	class Front extends ControllerClass{
		function first(){
			$news=$this->load_model('firstPage');

			$data=array(
				'title'=>'Camerino International',
				'news'=>$news->getFirstPageNews()
			);

			$this->load_view('firstPageHeader',$data);
			$this->load_view('firstPageCenter',$data);
			$this->load_view('footer',$data);
		}
	}
 ?>