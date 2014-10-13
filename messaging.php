<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	
	require 'vendor/autoload.php';
 
	use Parse\ParseClient;
    use Parse\ParseObject;
	use Parse\ParseQuery;
	use Parse\ParseUser;
 
	ParseClient::initialize('eo7wLLlQekmYfJJ77gmXhQkTfFC3qK0OvKV8pFYK', 'ojNzbqHndG4S4cz9xDPkuwa6R3GNwzMiNwSh23TY', 'L1UcjLzDovHeWVpDzGj8ruUNrJXdTx43pzdushnO');
	
	
try {
  $user = ParseUser::logIn("polarionlive2014", "survey");
  // Hooray! Let them use the app now.
} catch (ParseException $ex) {
  // Show the error message somewhere and let the user try again.
  echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
}
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Message Testing</title>
<link href="_css/live2014.css" rel="stylesheet" type="text/css" />
</head>

<body>
<strong style="font-weight:normal;" id="docs-internal-guid-a14bb17b-e219-db6a-186f-dbb9b496e8a3"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; font-size:22px; color:#4a86e8; font-style:normal; font-weight:normal; text-decoration:none; ">Does This Resonate? </span>
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-right: 18pt;"><span style="font-family:Arial; font-size:22px; color:#4a86e8; font-style:normal; font-weight:normal; text-decoration:none; ">Please Let Us Know!</span></p>
<br />
<p dir="ltr" style="line-height:1.5;margin-top:0pt;margin-bottom:0pt;margin-right: 18pt;"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Thank you in advance for taking the time to give us feedback. &nbsp;It&rsquo;s as easy as </span><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial;  color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">1-2-3:</span></p>
<p dir="ltr" style="line-height:1;margin-top:0pt;margin-bottom:0pt;margin-left: 36pt;margin-right: 18pt;"><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">1 - </span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Read the following two content blog alternatives </span></p>
<p dir="ltr" style="line-height:1;margin-top:0pt;margin-bottom:0pt;margin-left: 36pt;margin-right: 18pt;"><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">2 - </span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Indicate your preferences</span></p>
<p dir="ltr" style="line-height:1;margin-top:0pt;margin-bottom:10pt;margin-left: 36pt;margin-right: 18pt;"><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">3 - </span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Add suggestions as applicable</span></p>
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-right: 18pt;"><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Please do not hesitate to also provide any input you may have.</span></p>
<br />
<p dir="ltr" style="line-height:1.5;margin-top:0pt;margin-bottom:0pt;margin-right: 18pt;"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#073763; font-style:normal; font-weight:bold; text-decoration:none; ">Content </span><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#073763; font-style:normal; font-weight:normal; text-decoration:none; ">Block </span><span style="font-family:Arial;  color:#073763; font-style:normal; font-weight:bold; text-decoration:none; ">1:</span></p>
<p dir="ltr" style="line-height:1;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: 18pt;"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; font-size:19px; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; ">Polarion Software</span><span style="background-color:transparent; font-variant:normal; vertical-align:super; white-space:pre-wrap; font-family:Arial; font-size:11px; color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">®</span><span style="font-family:Arial; font-size:19px; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; "> Suite</span></p>
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: -9pt;"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#666666; font-style:normal; font-weight:bold; text-decoration:none; ">Unlock Synergies for Compliant Innovation</span><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial;  color:#000000; font-style:normal; font-weight:bold; text-decoration:none; "><br class="kix-line-break" />
  </span><span style="font-family:Arial; font-size:13px; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; "><br class="kix-line-break" />
</span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Accelerate complex </span><span style="background-color:#ffffff; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">Software</span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> and </span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">Embedded Systems Development</span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> via uncoupled workflow automation at the artifact level. &nbsp;Leverage multi-directional</span><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> traceability for highly efficient reuse, issue-, change- and variant management, and automate proof of compliance</span></p>
<br />
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: -9pt;"><span style="background-color:transparent; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial;  color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">Solve specific challenges with one or a mix of Polarion&rsquo;s solutions, purpose-built ontop of one unified platform to</span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> accelerate </span><a href="http://www.polarion.com/products/requirements/index.php" style="text-decoration:none;"><span style="background-color:#ffffff; font-variant:normal; vertical-align:baseline; white-space:pre-wrap; font-family:Arial; color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Collaboration</span></a><span style="font-family:Arial; color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">, </span><a href="http://www.polarion.com/products/qa/index.php" style="text-decoration:none;"><span style="font-family:Arial;  color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Integrity</span></a><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> and </span><a href="http://www.polarion.com/products/alm/index.php" style="text-decoration:none;"><span style="font-family:Arial;  color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Innovation</span></a><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">, with the option to seamlessly evolve in step with growing organizational needs.</span></p>
<br />
<p dir="ltr" style="line-height:1.5;margin-top:0pt;margin-bottom:0pt;margin-right: -9pt;"><span style="font-family:Arial;  color:#073763; font-style:normal; font-weight:bold; text-decoration:none; ">Content </span><span style="font-family:Arial;  color:#073763; font-style:normal; font-weight:normal; text-decoration:none; ">Block</span><span style="font-family:Arial;  color:#073763; font-style:normal; font-weight:bold; text-decoration:none; "> 2:</span></p>
<p dir="ltr" style="line-height:1;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: 18pt;"><span style="font-family:Arial; font-size:19px; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; ">Polarion Software</span><span style="font-family:Arial; color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">®</span><span style="font-family:Arial; font-size:19px; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; "> Platform</span></p>
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: 18pt;"><span style="font-family:Arial;  color:#666666; font-style:normal; font-weight:bold; text-decoration:none; ">Unlock Synergies Across Lifecycles and Projects</span><span style="font-family:Arial; color:#000000; font-style:normal; font-weight:bold; text-decoration:none; "><br class="kix-line-break" />
  <br class="kix-line-break" />
</span><span style="font-family:Arial; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Align everyone around what is being built and why - real-time - throughout the development lifecycle and across projects, to drive </span><span style="font-family:Arial; font-size:11px; color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">Product</span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">, </span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">Software</span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> and </span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:bold; text-decoration:none; ">Embedded Systems</span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> advancement via one unified system of record.</span></p>
<br />
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;"><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Accelerate </span><a href="http://www.polarion.com/products/requirements/index.php" style="text-decoration:none;"><span style="font-family:Arial;  color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Collaboration</span></a><span style="font-family:Arial;  color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">, </span><a href="http://www.polarion.com/products/qa/index.php" style="text-decoration:none;"><span style="font-family:Arial;  color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Integrity</span></a><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> and </span><a href="http://www.polarion.com/products/alm/index.php" style="text-decoration:none;"><span style="font-family:Arial;  color:#1155cc; font-style:normal; font-weight:bold; text-decoration:underline; ">Innovation</span></a><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; "> via multi-directional traceability that delivers full transparency, as well as reuse, issue-, change- and variant management. &nbsp;Define workflows at the artifact level to increase team effectiveness, and automate proof of compliance at every task complete.</span></p>
<br />
</strong>
<p dir="ltr" style="line-height:1.15;margin-top:0pt;margin-bottom:0pt;margin-left: 18pt;margin-right: -9pt;"><strong style="font-weight:normal;"><span style="font-family:Arial;  color:#000000; font-style:normal; font-weight:normal; text-decoration:none; ">Solve specific challenges with one or a mix of Polarion&rsquo;s solutions, purpose-built ontop of one unified platform</span><span style="font-family:Arial;  color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">, with the option to seamlessly evolve in step with growing organizational demands.</span></strong></p>

<p>
  <!--<span style="font-family:Arial; font-size:11px; color:#222222; font-style:normal; font-weight:normal; text-decoration:none; ">Please send feedback to <a href="mailto:info@polarion.com">info@polarion.com</a></span>--></p>
<form id="form1" name="form1" method="post" action="m/submitSurvey.php">
	<hr />
  <h3>Choose Preferred Content Block:</h3>
	<label>
  <input type="radio" name="PreferredContent" value="block1" id="PreferredContent_0" />Block 1</label>
  <br />
  <label>
    <input type="radio" name="PreferredContent" value="block2" id="PreferredContent_1" />Block 2</label>
  <br />
  Any Suggstions/Comments:
  <label>
    <textarea name="contentBlockSuggestion" id="contentBlockSuggestion" cols="45" rows="5"></textarea>
  </label>
  <br />
  <hr />
  <br />
  <h3>
  Choose Preferred Platform/Product Name:</h3>
	<label>
  <input type="radio" name="PreferredPlatform" value="platform1" id="PreferredPlatform_0" />Polarion Software® Suite</label>
  <br />
  <label>
    <input type="radio" name="PreferredPlatform" value="platform2" id="PreferredPlatform_1" />Polarion Software® Platform</label>
  <br />
  <br />
  Any Suggstions/Comments:
  <label>
    <textarea name="platformSuggestion" id="platformSuggestion" cols="45" rows="5"></textarea>
  </label>
  <br />
  <hr />
  <br />
  <h3>
  Choose Preferred Product Name Tag:</h3>
	  <label>
	    <input type="radio" name="PreferredProduct" value="product1" id="PreferredProduct_0" />Unlock Synergies for Compliant Innovation</label>
	  <br />
	  <label>
	    <input type="radio" name="PreferredProduct" value="product2" id="PreferredProduct_1" />Unlock Synergies Across Lifecycles and Projects</label>
	  <br />
	  <br />
	  Any Suggstions/Comments:
	  <label>
	    <textarea name="productSuggestion" id="productSuggestion" cols="45" rows="5"></textarea>
    </label>
	<p>
	  <input class="centered" type="submit" name="button" id="button" value="Submit" />
  </p>
</form>


</body>
</html>
