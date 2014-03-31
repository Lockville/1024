<html>
<head>
  <meta charset="utf-8">
  <title>Lockville 1024</title>
  <meta property="og:title" content="Lockville 1024 nyereményjáték" />
  <meta property="og:image" content="http://lockville.hu/1024/ogimg.jpg" />
  <meta property="og:description" content="Juss el 1024-ig és jutalmad egy Lockville ajándék kupon!" />
</head>
<body>
<?php 
$redirect = rand(1,2); //Generate random number

if ($redirect = 1) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'nyeremeny/index.html';
	</script> <?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'kupon/index.html';
	</script> <?php
}


?>

</body>
</html>