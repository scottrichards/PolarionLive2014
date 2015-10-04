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
 
	ParseClient::initialize('ytC7lrxAdRDvguofSHtRLyPe8DdiO5MdC4VdMDoz', 'iEkDJrIdoFFaGZrO2aCFWHJC0uBMbmV3DJxS0rSs', '0VA3z2dv24ilo3Iib400H2Zm7nsGLi5gZByH20ON');
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Polarion Live 2014 Agenda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../_css/adminStyles.css" rel="stylesheet" type="text/css" />
	<link href="../m/agenda.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
  </style>
</head>

<body>
<div data-role="page">
<?php 
	$query = new ParseQuery("Agenda");
	$query->ascending("start");
	$results = $query->find();
  ?> 
	<div data-role="header">
		<h2><a href="../index.html"><img class="polarion-logo" src="../_img/polarion_logo_240x264.gif" width="62" height="67" alt="Polarion" /></a><span class="heading">Agenda</span></h2>
	</div><!-- /header -->
	<div role="main" class="ui-content">
	  <!--<div class="sessionRow">
    	<div class="sessionIcon"><img src="../_img/beer_50.png" width="50" height="50" />
      </div>
      <div class="sessionInfo">
        <div class="sessionTime">8:30-9:30<span class="sessionLocation">Foyer</span></div>
        <div class="sessionName"><a href="#">Polarion 2015 Preview</a></div>
       </div>
    </div>-->
		<?php 
 date_default_timezone_set('UTC');
 
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

function getIcon($iconType) {
	$iconStr = "<img src=\"../_img/";
	if (!is_null($iconType)) {	
		switch ($iconType) {
			case "cocktail" : $iconStr .= "beer_50.png";
					break;
			case "food" : $iconStr .= "fork_75.png";
				break;
			case "key" : $iconStr .= "key_filled_75.png";
				break;
			case "coffee" : $iconStr .= "coffee_75.png";
				break;
			case "expert" : $iconStr .= "collaboration_50.png";
				break;
			case "trophy" : $iconStr .= "trophy_50.png";
				break;
			default : $iconStr .= "1x1.png";
				break;
		}
	} else {
		$iconStr .= "1x1.png";
	}
	$iconStr .= "\" width=\"50\" height=\"50\" />";
	return $iconStr;
}

function getSessionLink($object) {
	if ($object->getObjectId() == "bDrdterv72") {
		$href = "<a href=\"experts.php\">" . $object->get('session') . "</a>";
	} else {
		$href = "<a href=\"agendaDetails.php?id=" . $object->getObjectId() . "\">" . $object->get('session') . "</a>";
	}
	return $href;
}

//	echo date('l jS \of F Y G:i A');
	if (count($results) > 0) {
	
		for ($i = 0; $i < count($results); $i++) { 
			echo "\n<div class=\"sessionRow\">\n";
		  	$object = $results[$i];
				echo "<div class=\"sessionIcon\">";
				echo getIcon($object->get('icon'));
				echo "</div>\n";
				echo "<div class=\"sessionTime\">" . getTime($object->get('start'),$object->get('end'));
				echo "<span class=\"sessionLocation\">" . $object->get('location') . "</span>\n";
				echo "</div>\n";
//				echo "<div class=\"sessionName\">"  . $object->get('session') . "</div>\n";
				echo "<div class=\"sessionName\">"  . getSessionLink($object) . "</div>\n";
			echo "</div>\n";
		}
	}
  ?> 
 	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
