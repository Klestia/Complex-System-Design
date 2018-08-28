<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class Map extends ControllerClass{
		function showMap(){
			$data=array(
				'title'=>'Camerino Map'
			);
			$this->load_view('header',$data);
			$this->load_view('map',$data);
			$this->load_view('footer',$data);
		}
	}
?>