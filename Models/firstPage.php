<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');
	
	class firstPage extends ModelClass{
		function getFirstPageNews(){
			return $this->do_query('SELECT * FROM news ORDER BY timestamp DESC LIMIT 4');
		}
	}
 ?>