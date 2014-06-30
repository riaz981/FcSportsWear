<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Thank You</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
<![endif]-->
<!--[if !IE]><!-->
	<link type="text/css" rel="stylesheet" href="master.css">
 <!--<![endif]-->
</head>
<body>
<div id="outermostdiv">
      <?php include 'header.html'; ?>
        <?php include 'navigator.html'; ?>
      <div id="innerindex">
    <br>
    <p>Thankyou for sending us an email. A message has been sent to the developer.</p>
    <form action="destroyer.php" method="get">
        <input type="hidden" name="page" value="destroy">
        <input type="submit" value="Home">
    </form>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>