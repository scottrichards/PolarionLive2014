<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
 
	ParseClient::initialize('ytC7lrxAdRDvguofSHtRLyPe8DdiO5MdC4VdMDoz', 'iEkDJrIdoFFaGZrO2aCFWHJC0uBMbmV3DJxS0rSs', '0VA3z2dv24ilo3Iib400H2Zm7nsGLi5gZByH20ON');
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Polarion Live 2015 Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../../_css/adminStyles.css" rel="stylesheet" type="text/css" />
<script src="../../jquery.mobile-1.4.4/jquery-1.4.4.min.js"></script>
	<script src="../../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="page">
<?php 
	$query = new ParseQuery("ExpertSignUp");
	$query->ascending("session");
	$query->includeKey("user");
	$results = $query->find();
  ?> 
	<div data-role="header">
		<h1><img src="../../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" />Polarion Live 2015 </h1>
	</div><!-- /header -->
	<h2>Meet the Experts</h2>
	<div role="main" class="ui-content">
  <p><?php 
		echo "Displaying " . count($results) . " sign ups:";
		?>
	</p>
		<table width="90%" border="1" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>Session</th>
		    <th>Email</th>
		    <th>DeviceId</th>
	    </tr>
		<?php 
 
function getSessionName($sessionId) {
  switch ($sessionId) {
		case 0 : return "Polarion API & Widgets";
		case 1 : return "Polarion Integrations";
		case 2 : return "Process & Workflow";
		case 3 : return "New Features";
	}
}
	
	if (count($results) > 0) {
	
		for ($i = 0; $i < count($results); $i++) { 
			echo "<tr>";
		  	$object = $results[$i];
		  	echo "<td>" . getSessionName($object->get('session')) . "</td>";
				echo "<td>" . $object->get('email') . "</td>";
				echo "<td>" . $object->get('uuid') . "</td>";
			echo "</tr>";
		}
	}
  ?> 
	  </table>
  <p>&nbsp;</p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4><a href="http://www.polarion.com/company/copyright.php">Copyright</a> © 2015 Polarion Software</h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>
