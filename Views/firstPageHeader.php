<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/foundation.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/font-awesome.css">
  </head>
  <body>
    <div class="hero-image">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <div class="top-bar">
              <ul class="top-bar-title">
                 <img style="max-height: 70px;" src="http://international.unicam.it/sites/d7.unicam.it.international/files/logo-university-of-Camerino_0.png">
              </ul>
              <ul class="dropdown menu top-bar-left" data-dropdown-menu>
                <li>
                  <a href="<?php echo BASE_URL;?>">Home</a>
                </li>
                <li>
                  <a href="<?php echo BASE_URL.'news/0';?>">News</a>
                </li>
                <li>
                  <a href="<?php echo BASE_URL.'info';?>">Information</a>
                </li>
                <li>
                  <a href="<?php echo BASE_URL.'forum';?>">Forum</a>
                </li>
                <li>
                  <a href="<?php echo BASE_URL.'map';?>">Interactive Map</a>
                </li>
              </ul>
              <ul class="dropdown menu top-bar-right" data-dropdown-menu>
                <?php 
                  if(isset(SessionClass::$instance->loggedIn)){
                    echo '<li class="loginButton"><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> '.SessionClass::$instance->username.'</a><ul class="menu vertical">';
                    if(SessionClass::$instance->admin=='YES') echo '<li><a href="'.BASE_URL.'admin"><i class="fa fa-wrench" aria-hidden="true"></i> Admin Panel</a></li>';
                    echo '<li><a href="'.BASE_URL.'editUser"><i class="fa fa-cog" aria-hidden="true"></i> Edit</a></li><li><a href="'.BASE_URL.'logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li></ul></li>';
                  } else{
                    echo '<li class="loginButton"><a href="'.BASE_URL.'loginPage">Login / Register</a></li>';
                  }
                ?>
              </ul>
            </div>
          </div>
          <div class="slogan">
            <h1>Welcome to Camerino</h1>
            <h3>all students, researchers and professors who have chosen the University of Camerino for a period of study, research or work.</h3>
          </div>
        </div>
      </div>
    </div>