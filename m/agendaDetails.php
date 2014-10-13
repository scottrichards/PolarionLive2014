<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
 
	ParseClient::initialize('eo7wLLlQekmYfJJ77gmXhQkTfFC3qK0OvKV8pFYK', 'ojNzbqHndG4S4cz9xDPkuwa6R3GNwzMiNwSh23TY', 'L1UcjLzDovHeWVpDzGj8ruUNrJXdTx43pzdushnO');
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Polarion Live 2014 Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../_css/adminStyles.css" rel="stylesheet" type="text/css" />
<script src="../jquery.mobile-1.4.4/jquery-1.4.4.min.js"></script>
	<script src="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="page">
<?php 
	$query = new ParseQuery("Agenda");
	$query->ascending("start");
	$results = $query->find();
  ?> 
	<div data-role="header">
		<h1><img src="../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" />Polarion Live 2014 </h1>
	</div><!-- /header -->
	<h2>Agenda</h2>
	<div role="main" class="ui-content">

		<table width="90%" border="1" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>Session</th>
		    <th>Time</th>
		    <th>Location</th>
	    </tr>
		<?php 
 
	
	if (count($results) > 0) {
	
		for ($i = 0; $i < count($results); $i++) { 
			echo "<tr>";
		  	$object = $results[$i];
		  	echo "<td>" . $object->get('session') . "</td>";
				echo "<td>"  . "</td>";
				echo "<td>" . $object->get('location') . "</td>";
			echo "</tr>";
		}
	}
  ?> 
	  </table>
  <p>&nbsp;</p>
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
