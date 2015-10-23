<?php require_once('../Connections/bcContent.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_Recordset1 = 20;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_bcContent, $bcContent);
//$query_Recordset1 = "SELECT * FROM poll_question";
echo "SQL Query";
//$query_Recordset1 = "SELECT * FROM poll_question JOIN poll_relationship ON poll_question.poll_id = poll_relationship.poll_id WHERE poll_relationship.group_id = 35";
$query_Recordset1 = "SELECT pq.id questionId, pq.question FROM poll_question pq JOIN poll_relationship ON pq.poll_id = poll_relationship.poll_id WHERE poll_relationship.group_id = 35";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
echo "SQL Query2";
$Recordset1 = mysql_query($query_limit_Recordset1, $bcContent) or die(mysql_error());
echo "Completed Query";
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?>
<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require '../vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
 
	ParseClient::initialize('7vtrNXPqcDSOZGEx3tEqsjOCsE8hl8PY9pwU8SLA', 'W2GSPzRe0JCCaopCsiRJkpRgIIW7YDlITdTEGOcE', '7rfI840ImjqlUulD5DwkwGYMcoAhpdgrQxTr6urw');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Connect To Database</title>
</head>

<body>

<?php 
	$doSave = false;
	
	// Create the Category Object for the Question Group
	$categoryObject = new ParseObject("Categories");
	$categoryObject->set("name", "3 Month");
	try {
		if ($doSave) {
			$categoryObject->save();
			echo 'New Category created with objectId: ' . $categoryObject->getObjectId();
		}
	} catch (ParseException $ex) {  
		// Execute any logic that should take place if the save fails.
		// error is a ParseException object with an error code and message.
		echo 'Failed to create Category object, with error message: ' . $ex->getMessage();
	}
	
	do { 
	  var_dump($row_Recordset1);
		print "<p>id: " .  $row_Recordset1['questionId'] . "</p>";
		print "<h3>QUESTION: " . $row_Recordset1['question'] . "</h3>";
		print "<hr/>"; 
		print "<hr/>"; 
		
		$questionObject = new ParseObject("Questions");
		$questionObject->set("question", $row_Recordset1['question']);
		$questionObject->set("category", $categoryObject);
		try {
			if ($doSave) {
				$questionObject->save();
				echo 'New Question object created with objectId: ' . $questionObject->getObjectId();
			}
		} catch (ParseException $ex) {  
			// Execute any logic that should take place if the save fails.
			// error is a ParseException object with an error code and message.
			echo 'Failed to create Question object, with error message: ' . $ex->getMessage();
		}
	
		// Query answers
		// ------------------
	
		$query_Answers = "SELECT answer, `ordinal`
		FROM `poll_answer`
		WHERE poll_answer.question_id = " . $row_Recordset1['questionId'] . " ORDER BY `ordinal`";
		$query_limit_AnswerRecordset = sprintf("%s LIMIT %d, %d", $query_Answers, 0, 20);
		$answersRecordsetQuery = mysql_query($query_limit_AnswerRecordset, $bcContent) or die(mysql_error());
		$row_AnswersRecordset = mysql_fetch_assoc($answersRecordsetQuery);
		$all_AnswersRecordset = mysql_query($query_Answers);
		$totalRows_AnswersRecordset = mysql_num_rows($all_AnswersRecordset);
		$totalPages_AnswersRecordset = ceil($totalRows_AnswersRecordset/20)-1;
		if ($totalRows_AnswersRecordset > 0) 
		{
			do { 
	//			print "<p>ordinal: " .  $row_AnswersRecordset['ordinal'] . "</p>";
				// Parse Create and save Answer Object
				$answerObject = new ParseObject("Answers");
				$answerObject->set("answer", $row_AnswersRecordset['answer']);
				$answerObject->set("question", $questionObject);
				try {
					if ($doSave) {
						$answerObject->save();
						echo 'New Answer object created with objectId: ' . $answerObject->getObjectId();
					}
				} catch (ParseException $ex) {  
					// Execute any logic that should take place if the save fails.
					// error is a ParseException object with an error code and message.
					echo 'Failed to create Answer object, with error message: ' . $ex->getMessage();
				}
				
				print "<p>Answer: ";
				print $row_AnswersRecordset['answer'];
				print "</p>";
				print "<hr/>"; 
				
			} while ($row_AnswersRecordset = mysql_fetch_assoc($answersRecordsetQuery));
		}
		
		
  } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1));

	
	
 ?>
<form>
  <p>
    <label for="inputCategory">Input Category:</label>
    <input type="text" name="inputCategory" id="inputCategory" />
    
  </p>
  <p>
    <label for="categoryName">New Category Name:</label>
    <input type="text" name="categoryName" id="categoryName" />
  </p>
</form> 
<table width="80%" border="1">
  <tr>
    <td>Id</td>
    <td>Question</td>
    <td>&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    
      <td><?php echo $row_Recordset1['questionId']; ?></td>
      <td><?php echo $row_Recordset1['question']; ?></td>
      <td>&nbsp;</td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>

</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
