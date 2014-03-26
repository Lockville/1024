<?php
$to = $_POST["to"];

$rand = rand(10000000,99999999); //random number generator (8 digits)

$rand = 'LV-'.$rand; //Add prefix to stop browsers from seeing number as phone no.

$myFile = "srkszq1.txt";	//append random number to file (with line break)
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $rand . " " . $to . PHP_EOL);
fclose($fh);


//mail()

$message = '

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lockville nyeremény kupon</title>
</head>
<body>
  <div style="display: block; width: 80%; margin: auto; padding: 2%; padding-top: 0.5%; background-color: rgba(241, 196, 15, 0.15); border: 4px solid #c0392b; text-align: center; color: #43140f; font-family: sans-serif;">
      <img src="http://lockville.hu/res/seal_small.png" alt="Lockville" style="display: block; margin: auto;" />
      <h1 style="margin-top:0.3em">Lockville nyeremény kupon</h1>
      <h2>A kupon sorszáma: '.$rand.'</h2>
      <p>
       Ez a kupon <strong>ingyenes</strong> részvételt biztosít <strong>1 fő</strong> részére a Lockville Kiszabadulós Kalandjátékban.
      </p>
    
    
    <hr/>
    <p style="font-size: 0.75em; text-align: justify;">
      <strong class="important">Megjegyzés:</strong> A nyeremény kupon a Lockville Kiszabadulós Kalandjáték pályájára érvényes. Egy csoportban egy kupon használható fel. Ez a kupon átruházható, de készpénzre nem váltható. Ez a kupon <strong>2014. május 15-ig</strong> használható fel.
    </p>
    <hr/>
    <p>
      További információk, nyitvatartás és elérhetőségek: <br/><a href="http://lockville.hu" target="_blank" style="color: #d14233;">www.lockville.hu</a>
    </p>
  </div>
</body>
</html>
	

';


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
		window.location = 'index.html';
	</script>
<?php
}
?>