<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Raffle Submission</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../_css/adminStyles.css" rel="stylesheet" type="text/css" />
	<link href="../m/agenda.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	.centered {
	text-align: center;
	}
	#form1 {
		margin-left:10px;
		margin-right:10px;
	}
  </style>
	<script src="../jquery.mobile-1.4.4/jquery.min.js"></script>
	<script src="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="header">
		<h2><a href="../index.html"><img class="polarion-logo" src="../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" /></a><span class="heading">Raffle Submission</span></h2>
</div><!-- /header -->
<div class="centered">
<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
	use Parse\ParseUser;
 
	ParseClient::initialize('ytC7lrxAdRDvguofSHtRLyPe8DdiO5MdC4VdMDoz', 'iEkDJrIdoFFaGZrO2aCFWHJC0uBMbmV3DJxS0rSs', '0VA3z2dv24ilo3Iib400H2Zm7nsGLi5gZByH20ON');
	
	
	$survey= new ParseObject("Testimonial");
	$survey->set("name",$_POST['name']);
	$survey->set("company",$_POST['company']);
	$survey->set("email",$_POST['email']);
	$survey->set("title",$_POST['title']);
	$survey->set("tesimonial",$_POST['testimonial']);
	try {
		$survey->save();
		echo '<br />Survey was submitted...<br />';
	} catch (ParseException $ex) {  
		// Execute any logic that should take place if the save fails.
		// error is a ParseException object with an error code and message.
		echo 'Failed to create new object, with error message: ' + $ex->getMessage();
	}
	
?>
</div>
<div class="centered" style="margin-top:20px;">
<a href="agenda.php">Agenda</a> </div>
</body>