<?php

$rand = rand(10000000,99999999); //random number generator

$myFile = "numbers.txt";	//append random number to file (with line break)
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$rand" . PHP_EOL;
fwrite($fh, $stringData);
fclose($fh);


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Lockville.hu <info@lockville.hu>' . "\r\n";
$to = $_POST["to"];
$message = "
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
  
													$rand

  </body>
</html>
";

$mail_status = mail("$to","Nyeremény",$message,$headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = '2048success.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		window.location = '#';
	</script>
<?php
}
?>