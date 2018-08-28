<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class userModel extends ModelClass{
		function register($username,$password,$email){
			return $this->do_query("INSERT INTO users(username,password,email) VALUES('".$username."','".SecurityClass::hashPasswords($password)."','".$email."')");
		}
		function login($username,$password){
			$return_data=$this->do_query("SELECT * FROM users WHERE users.username='".$username."'");
			if($return_data['num_rows']==1){
				if(SecurityClass::equalHash($password,$return_data[0]['password'])) return $return_data;
				else return false;
			}
		}
		function edit($username,$email,$password,$oldpassword){
			$return_data=$this->do_query("SELECT * FROM users WHERE users.username='".SessionClass::$instance->username."'");
			if($return_data['num_rows']==1){
				if(SecurityClass::equalHash($oldpassword,$return_data[0]['password'])){
					return $return_data=$this->do_query("UPDATE users SET users.username='".$username."',users.email='".$email."',users.password='".SecurityClass::hashPasswords($password)."' WHERE users.ID=".SessionClass::$instance->ID);
				}	else return false;
			}
		}
	}
 ?>