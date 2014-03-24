<h2>Winner form</h2>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

  To: <input type="text" name="from"><br>

  <input type="submit" name="submit" value="Submit Feedback">

  </form>

  <?php 



    $from = $_POST["from"];



    mail("$from","Kupon","üzenet","From: info@lockville.hu\n");


?>