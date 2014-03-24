<?php

$to = $_POST["to"];
$message = "A levél tartalma";

$mail_status = mail("$to","Nyeremény",$message,"From: Lockville.hu <info@lockville.hu>");

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