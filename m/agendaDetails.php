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
	<link href="../_css/sessionDetails.css" rel="stylesheet" type="text/css" />
<script src="../jquery.mobile-1.4.4/jquery-1.4.4.min.js"></script>
	<script src="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="page">

	<div data-role="header">
		<h2><img class="polarion-logo" src="../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" /><span class="heading">Session Details</span> </h2>
	</div><!-- /header -->
	<div role="main" class="ui-content">
	<?php 
function getTime($start,$end) {
	$timeStr = "";
	if (!is_null($start)) {
		$timeStr = $start->format("g:i");
	}
	if (!is_null($end)) {
		$timeStr .=  " - " .  $end->format("g:i");
	}
  return $timeStr;
}

	$query = new ParseQuery("Agenda");
	$objectId = $_GET["id"];
//	echo "ObjectId = " . $_GET["id"];
	if (!is_null($objectId)) {
		$sessionObject = $query->get($objectId);
		echo "<div class=\"sessionName\">" . $sessionObject->get("session") . "</div>\n";
		echo "<div class=\"sessionTime\">Time: " . getTime($sessionObject->get("start"),$sessionObject->get("end")) . "</div>\n";
		if (!is_null($sessionObject->get("location"))) {
			echo "<div class=\"sessionLocation\">Location: " . $sessionObject->get("location") . "</div>\n";
		}
		echo "<div class=\"sessionDescription\">Description: " . $sessionObject->get("description") . "</div>\n";
		echo "<div class=\"sessionSpeakers\">Presenter(s): " . $sessionObject->get("presenter") . "</div>\n";
	} 
  ?> 
		
  	<div></div>
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
