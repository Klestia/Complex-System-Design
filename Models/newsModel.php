<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class newsModel extends ModelClass{
		function getPage($pageNumber){
			return $this->do_query("SELECT * FROM news ORDER BY news.timestamp DESC LIMIT 4 OFFSET ".($pageNumber*4));
		}
		function numTotal(){
			return $this->do_query("SELECT COUNT(*) AS NUM FROM news");
		}
		function getSingleNews($id){
			return $this->do_query("SELECT * FROM news WHERE news.ID=".$id);
		}
		function getSearchNews($search){
			$searchterms=explode(' ',$search);
			$query='SELECT * FROM news WHERE ';
			foreach($searchterms as $term){
				$query.=' news.newsTitle LIKE \'%'.$term.'%\' OR news.newsContent LIKE \'%'.$term.'%\' OR';
			}
			$query=substr($query,0,-2);
			return $this->do_query($query);
		}
	}
 ?>