<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class infoModel extends ModelClass{
		function getInfoCat(){
			return $this->do_query('SELECT * FROM info_category');
		}
		function getSingleInfo($id){
			return $this->do_query('SELECT * FROM information WHERE information.ID='.$id);
		}
		function getSingleCatInfo($id){
			return $this->do_query('SELECT * FROM information WHERE information.category_FK='.$id);
		}
		function getSearchInfo($search,$id){
			$searchterms=explode(' ',$search);
			$query='SELECT * FROM information WHERE information.category_FK='.$id.' AND (';
			foreach($searchterms as $term){
				$query.=' information.infoTitle LIKE \'%'.$term.'%\' OR information.infoContent LIKE \'%'.$term.'%\' OR';
			}
			$query=substr($query,0,-2).')';
			return $this->do_query($query);
		}
	}
?>