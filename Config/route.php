<?php 
	defined('BASE_PATH') OR exit('No direct script access allowed');
	//Put $var if you want to pass arguments to it

	$route['default']='Front/first';
	$route['404']='Controller404/__construct';

	// USER Routes
	$route['loginPage']='Users/loginPage';
	$route['login']='Users/login';
	$route['signup']='Users/signup';
	$route['logout']='Users/logout';
	$route['editUser']='Users/edit';

	//NEWS Routes
	$route['news/$var']='News/showall/$var';
	$route['article/$var']='News/showsingle/$var';
	$route['searchNews']='News/searchNews';

	//INFO Routes
	$route['info']='Info/showAll';
	$route['info/$var']='Info/showSingle/$var';
	$route['searchInfo']='Info/showSearch';

	//FORUM Routes
	$route['forum']='Forum/showSubForums';
	$route['subforum/$var/$var']='Forum/showThreads/$var/$var';
	$route['thread/$var/$var']='Forum/showComments/$var/$var';
	$route['deleteThread']='Forum/deleteThread';
	$route['createThread']='Forum/createThread';
	$route['deleteComment']='Forum/deleteComment';
	$route['createComment']='Forum/createComment';

	//ADMIN Routes
	$route['admin']='Admin/show';

	//MAP Routes
	$route['map']='Map/showMap';
?>