<?php
$to = $_POST["to"];

$rand = rand(10000000,99999999); //random number generator (8 digits)

$myFile = "numbers.txt";	//append random number to file (with line break)
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $rand . " " . $to . PHP_EOL);
fclose($fh);


//mail()

$message = "
HTML tags are supported<br>
Random number: <b>$rand<b>
";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Lockville.hu <info@lockville.hu>' . "\r\n";


$mail_status = mail("$to","Nyeremény",$message,$headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'success.html';
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