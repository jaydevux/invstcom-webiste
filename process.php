<?php
session_start();
$_SESSION[email] = $_POST['email'];
$ip = $_POST['ip'];
$email = $_POST['email'];

if ($ip == ''  && $email == '') {echo '<center><p><img src="/images/icon-error.png" width="48" height="48" /></p><p style="font-family: Arial; font-size: 18px; color: #c91f1f;">Problem with your submission, please <a href="javascript:history.go(-1);">go back!</a></p><center>'; exit;}
else {}

header( 'Location: http://www.investingnewsalerts.com/stocksites-form/index.php?email='.$email );

// --- SAVE FORM TO FILE
$filename = "signup.txt";

foreach ($_POST as $key => $value) {
$posted_titles .= $key."|";
$posted_values .= $value."|";
}

$somecontent = $posted_titles."\n".$posted_values;
$fh = fopen($filename, 'a') or die("can't open file");
$stringData = $somecontent;
fwrite($fh, $stringData);
fclose($fh);

// --- update to softwarelogin per ron 8/14/13
//$postString1 = "http://app.icontact.com/icp/signup.php?listid=42778&specialid:42778=Q2NJ&clientid=1103926&formid=3666&reallistid=1&doubleopt=0&fields_email=".$email."";
$postString1 = "http://softwarelogin.com/api.php?apikey=3e404c016ae2c54277f0feda3ac8e349723aeecay&area=email&action=addemail&id=102646&email=".$email."";
$postString1;
file_get_contents($postString1);


// --- SEND EMAIL TO PARS
$to = "parsmediagroup@gmail.com";

// subject
$subject = 'WindStocks.info - New Sign Up';

// message
$message = '
<html>
<head>
  <title>WindStocks.info - New Sign Up</title>
</head>
<body>

<h2>Personal Info</h2>

<table border="1" width="600" bordercolor="#CCCCCC" style="border-collapse: collapse" cellpadding="2">
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Registration submitted on:</b></td>
		<td align="left" style="padding: 3px;">'.$todayis = date("l, F j, Y, g:i a").'</td>
	</tr>
	<tr>
		<td align="left" style="padding: 3px;" width="250"><b>Email:</b></td>
		<td align="left" style="padding: 3px;">'.$_POST["email"].'</td>
	</tr>
</table>

</body>
</html>
';

// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: WindStocks.info <info@windstocks.info>' . "\r\n";
$headers .= 'From: WindStocks.info <info@windstocks.info>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);


?>