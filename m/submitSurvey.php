<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
 
	ParseClient::initialize('eo7wLLlQekmYfJJ77gmXhQkTfFC3qK0OvKV8pFYK', 'ojNzbqHndG4S4cz9xDPkuwa6R3GNwzMiNwSh23TY', 'L1UcjLzDovHeWVpDzGj8ruUNrJXdTx43pzdushnO');
	
	
//	$survey= new ParseObject("Survey");
//	$survey->set("contentBlockSuggestion",$_POST['contentBlockSuggestion']);
	
?>

Content Block Suggestion: <?php echo $_POST['contentBlockSuggestion']; ?>
<br />
Content Block Favorite: <?php echo $_POST['PreferredContent']; ?>