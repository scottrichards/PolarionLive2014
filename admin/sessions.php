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
<title>Session Ratings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../_css/adminStyles.css" rel="stylesheet" type="text/css" />
<script src="../jquery.mobile-1.4.4/jquery.min.js"></script>
	<script src="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.js"></script>
</head>

<body>
<div data-role="page">
<?php
	$agendaQuery = new ParseQuery("Agenda");
	$agendaQuery->ascending("createdAt");
	$agendaData = $agendaQuery->find();
	$agendaArr = array();
	$sessionCounts = array();
	$sessionTotals = array();
	for ($i = 0; $i < count($agendaData); $i++) { 
		$sessionInfo = $agendaData[$i];
//		echo "id: " . $sessionInfo->getObjectId() . " = " . $sessionInfo->get("session");
		$agendaArr[$sessionInfo->getObjectId()] = $sessionInfo->get("session");
	}
// 	print_r($agendaArr);
	
	$query = new ParseQuery("SessionRating");
	$query->ascending("createdAt");
	$query->limit(200);
	$results = $query->find();
  ?> 
	<div data-role="header">
		<h1><img src="../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" />Polarion Live 2014 </h1>
	</div><!-- /header -->
	<h2>Session Rating</h2>
	<div role="main" class="ui-content">
  <p><?php 
		echo "Displaying " . count($results) . " ratings:";
		?>
	</p>
		<table width="90%" border="1" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>Session</th>
		    <th>Speaker</th>
		    <th>Content</th>
	    </tr>
		<?php 
 
function getSessionName($object) {
	global $agendaArr;
	global $sessionCounts;
	
	$sessionName = "";
	$sessionId = "";
	if (!is_null($object->get('session'))) {
		$session = $object->get('session');
		$session->fetch();
		$sessionId = 	$session->getObjectId();
		$sessionName = $session->get("session");
	} else {
		$sessionId = $object->get('sessionId');
		$sessionName = $agendaArr[$sessionId];
	}
//	$sessionCounts[$sessionId] = $sessionCounts[$sessionId] + intval($object->get('contentRating'));
	return $sessionName;
}
	
	if (count($results) > 0) {
	
		for ($i = 0; $i < count($results); $i++) { 
			echo "<tr>";
		  	$object = $results[$i];
		  	echo "<td>" . getSessionName($object) . "</td>";
//				echo "<td>" . "session" . "</td>";
				echo "<td>" . $object->get('presenterRating') . "</td>";
				echo "<td>" . $object->get('contentRating') . "</td>";
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
