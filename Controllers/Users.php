<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');

	class Users extends ControllerClass{
		function __construct(){

		}
		function loginPage(){
			if(isset(SessionClass::$instance->loggedIn))	RouterClass::route('');
			$data=array(
				'title'=>'Login/SignUp'
			);
			$this->load_view('header',$data);
			$this->load_view('login',$data);
			$this->load_view('footer',$data);
		}
		function login(){
			if(isset(SessionClass::$instance->loggedIn))	RouterClass::route('');
			FormValidation::set_rules('Username','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Password','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Login','required');
			if(FormValidation::run()==false){
				$this->loginPage();
			}	else{
				if(FormValidation::validate_data()==true){
					$user=$this->load_model('userModel');
					$userdata=$user->login($_POST['Username'],$_POST['Password']);
					if($userdata!=false){
						if($userdata[0]['banned']=='YES'){
							SessionClass::$instance->flashError='Your account has been banned.';
							$this->loginPage();
						}
						SessionClass::$instance->loggedIn=true;
						SessionClass::$instance->ID=$userdata[0]['ID'];
						SessionClass::$instance->username=$userdata[0]['username'];
						SessionClass::$instance->email=$userdata[0]['email'];
						SessionClass::$instance->admin=$userdata[0]['admin'];
						RouterClass::route('');
					}	else{
						SessionClass::$instance->flashError='Credentials failed to log in.';
						$this->loginPage();
					}
				} else{
					SessionClass::$instance->flashError='true';
					$this->loginPage();
				}
			}
		}
		function signup(){
			if(isset(SessionClass::$instance->loggedIn))	RouterClass::route('');
			FormValidation::set_rules('Username','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Email','required|trim|html_clear|valid_email');
			FormValidation::set_rules('Password','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Login','required');
			if(FormValidation::run()==false){
				$this->loginPage();
			}	else{
				if(FormValidation::validate_data()==true){
					$user=$this->load_model('userModel');
					if($user->register($_POST['Username'],$_POST['Password'],$_POST['Email'])){
						echo 'Successful';
					}	else{
						SessionClass::$instance->flashError='Username or email is already taken.';
						$this->loginPage();
					}
				} else{
					SessionClass::$instance->flashError='Some of your inputs don\'t match our rules';
					$this->loginPage();
				}
			}
		}
		function logout(){
			SessionClass::$instance->destroy();
			RouterClass::route('');
		}
		function edit(){
			if(!isset(SessionClass::$instance->loggedIn))	RouterClass::route('');
			$data=array(
				'title' => 'Edit User'
			);
			FormValidation::set_rules('Username','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Email','required|trim|html_clear|valid_email');
			FormValidation::set_rules('NewPassword','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('OldPassword','required|trim|min_length[8]|max_length[16]|html_clear|alpha_numeric');
			FormValidation::set_rules('Login','required');
			if(FormValidation::run()==false){
				$this->load_view('header',$data);
				$this->load_view('editUser',$data);
				$this->load_view('footer',$data);
			}	else{
				if(FormValidation::validate_data()==true){
					$user=$this->load_model('userModel');
					if($user->edit($_POST['Username'],$_POST['Email'],$_POST['NewPassword'],$_POST['OldPassword'])) RouterClass::route('logout');
					else{
						SessionClass::$instance->flashError='Editing your profile failed, either because of bad credentials or someone else having already taken the username or email.';
						$this->load_view('header',$data);
						$this->load_view('editUser',$data);
						$this->load_view('footer',$data);
					}
				}	else{
					SessionClass::$instance->flashError='Some of your inputs don\'t match our rules';
					$this->load_view('header',$data);
					$this->load_view('editUser',$data);
					$this->load_view('footer',$data);
				}
				
			}
		}
	}
 ?>