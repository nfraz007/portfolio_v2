<?php require_once 'include/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="description" content="Portfolio/CV/Resume website of Nazish Fraz | nfraz007, student of MAKAUT/WBUT. internships, certificates and projects">
  <meta name="keywords" content="nazish,fraz,nazish fraz,Nazish,Fraz,Nazish Fraz,nfraz.co.in, nfraz,nfraz007,NFraz">
  <meta name="author" content="Nazish Fraz">

  <title>Nazish Fraz | nfraz007</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo w3-hover-text-brown"><?=$NAME?> <span class="w3-small" id="page_name"></span></a>
      <ul id="slide-out" class="side-nav">
	    <li>
		    <div class="userView">
		      <div class="background">
		        <img src="<?=$IMAGE?>b5.jpg">
		      </div>
		      <a href="#!user"><img class="circle" src="<?=$IMAGE?>myphoto.jpg"></a>
		      <a href="#!name"><span class="white-text name"><?=$NAME?></span></a>
		      <a href="#!email"><span class="white-text email"><?=$PROFESSION?></span></a>
		    </div>
	    </li>
	    <li><a href="<?=$RESUME?>resume_1.pdf" target="_blank" class="waves-effect waves-darker"><i class="fa fa-cloud-download"></i>Resume 1</a></li>
	    <!-- <li><a href="<?=$RESUME?>resume_2.pdf" target="_blank" class="waves-effect waves-darker"><i class="fa fa-cloud-download"></i>Resume 2</a></li> -->
	    <li><div class="divider"></div></li>
	    <li><a class="waves-effect waves-darker" href="index.php">About Me</a></li>
	    <li><a class="waves-effect waves-darker" href="internship.php">Internships<span class="badge chip w3-brown right count_internship">0</span></a></li>
	    <li><a class="waves-effect waves-darker" href="project.php">Projects<span class="badge chip w3-brown right count_project">0</span></a></li>
	    <li><a class="waves-effect waves-darker" href="certificate.php">Certifications<span class="badge chip w3-brown right count_certificate">0</span></a></li>
	  </ul>
    </div>
  </nav>
<div class="">
	<div class="fixed-action-btn">
	    <a href="#" data-activates="slide-out" class="button-collapse waves-effect waves-light btn-floating btn-large w3-brown"><i class="fa fa-bars"></i></a>
	</div>
</div>