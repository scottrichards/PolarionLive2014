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
<title>Meet the Experts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../m/experts.css" rel="stylesheet" type="text/css" />
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
<form id="form1" name="form1" method="post" action="../m/expertsSignup.php">
  <h2 class="centered">Meet the Experts</h2>
  <p>Select a Topic by Noon:</p>
  <p>
    <label>
      <select name="topic" id="topic">
        <option value="0">Polarion API &amp; Widgets</option>
        <option value="1">Polarion Integrations</option>
        <option value="2">Process &amp; Workflow</option>
        <option value="3">New Features</option>
      </select>
    </label>
  </p>
  <?php 
	$query = new ParseQuery("Experts");
	$query->ascending("order");
	$results = $query->find();
	if (count($results) > 0) {
	
		for ($i = 0; $i < count($results); $i++) { 
			$object = $results[$i];
			$topicId = "id=\"topic" . $i . "\"";
			if ($i != 0) 
				echo "\n<div class=\"topicInfo hidden\"" . $topicId . " >";	
			else 
				echo "\n<div class=\"topicInfo\">";	
			echo "\n<div class=\"topicDescription\">" . $object->get('description') . "</div>\n";	
			echo " <div>Expert(s):</div>\n";
			echo "<div class=\"experts\">" . $object->get('expert') . "</div>\n</div>\n";
		}
	}
  ?>
  <p>
    <label>Email:
      <input type="text" name="email" id="email" />
    </label>
  </p>
  <p class="centered">
    <input type="submit" name="button" id="button" value="Sign Up" />
  </p>
</form>
<script type="text/javascript">
$("#form1").submit(function () {
	if ($('#email').val() == '') {
		alert('Please provide your email address');
		return false;
	} else 
		return true;
});

$("#topic").change(function() {
  var str = "";
	$( "select option:selected" ).each(function() {
      str += $( this ).val() + " ";
    });
		var topicId = "#topic" + str;
		$('.topicInfo').addClass("hidden");
		$(topicId).removeClass("hidden");
});
</script>
</body>
</html>
