<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
 
	ParseClient::initialize('eo7wLLlQekmYfJJ77gmXhQkTfFC3qK0OvKV8pFYK', 'ojNzbqHndG4S4cz9xDPkuwa6R3GNwzMiNwSh23TY', 'L1UcjLzDovHeWVpDzGj8ruUNrJXdTx43pzdushnO');
	
	
	$survey= new ParseObject("Survey");
	$survey->set("PreferredContent",$_POST['PreferredContent']);
	$survey->set("contentBlockSuggestion",$_POST['contentBlockSuggestion']);
	$survey->set("PreferredPlatform",$_POST['PreferredPlatform']);
	$survey->set("platformSuggestion",$_POST['platformSuggestion']);
	$survey->set("PreferredProduct",$_POST['PreferredProduct']);
	$survey->set("productSuggestion",$_POST['productSuggestion']);
	
?>
<!--Content Block Favorite: <?php echo $_POST['PreferredContent']; ?>
<br />
Content Block Suggestion: <?php echo $_POST['contentBlockSuggestion']; ?>
<hr />
Platform Favorite: <?php echo $_POST['PreferredPlatform']; ?>
<br />
Platform Suggestion: <?php echo $_POST['platformSuggestion']; ?>
<hr />
Product Favorite: <?php echo $_POST['PreferredProduct']; ?>
<br />
Product Suggestion: <?php echo $_POST['productSuggestion']; ?>
<hr />-->