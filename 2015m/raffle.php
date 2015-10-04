<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Raffle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../jquery.mobile-1.4.4/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
	<link href="../_css/adminStyles.css" rel="stylesheet" type="text/css" />
	<link href="../m/agenda.css" rel="stylesheet" type="text/css" />
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
<form id="form1" name="form1" method="post" action="../m/submitRaffle.php">
  <h3>Your Thoughts for a Chance to Win</h3>
  <p>Submit a Testimonial to Enter the Drawing</p>
  <p>Share What's Great about Polarion:</p>
  <p>
    <textarea name="testimonial" cols="50" rows="4" id="testimonial"></textarea>
  </p>
  <p><a href="../testimonial.html">See Sample Testimonials</a>  </p>
  <table width="80%" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="16%">Name:</td>
      <td width="84%"><input type="text" name="name" id="name" width="200px" /></td>
    </tr>
    <tr>
      <td>Company:</td>
      <td><input type="text" name="company" id="company" width="200px" /></td>
    </tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="title" id="title" width="200px" /></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="email" id="email" width="200px" /></td>
    </tr>
  </table>
  <p>
    <label>Marketing Usage Consent
      <input type="checkbox" name="marketingUsage" id="marketingUsage" />
    </label>
  </p>
  <p><a href="../rules.html">Raffle Rules</a> </p>
  <p class="centered">
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<script type="text/javascript">
$("#form1").submit(function () {
	if ($('#email').val() == '' || $('#title').val() == '' || $('#company').val() == '' || $('#title').val() == '') {
		alert('Please provide all contact information to enter the raffle');
		return false;
	} if ($('#testimonial').val() == '') {
		alert('Please provide a testimonial to enter the raffle');
		return false;
	}  else if (!$('#marketingUsage').is(":checked")) {
		alert('Please consent to marketing usage to enter the raffle');
		return false;
	} else 
		return true;
});
</script>
</body>
</html>
