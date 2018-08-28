<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class Admin extends ControllerClass{
		function __construct(){
			if(SessionClass::$instance->admin=='NO') RouterClass::route('');
		}
		function show(){
			$data=array(
				'title'='AdminPanel'
			);
		}
	}
 ?>