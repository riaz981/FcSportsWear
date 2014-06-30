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
    <?php $max=$_REQUEST['maxvalue']; ?>
      <div id="innerindex">
    <br>
    <p>Please keep this number <span style="color:red"><?php echo $max ?></span> to track your order.</p>
    <p>Thank you for shopping with us.</p>
    <form action="destroyer.php" method="get">
        <input type="hidden" name="page" value="destroy">
        <input type="submit" value="Home">
    </form>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
