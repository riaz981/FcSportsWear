<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Log In</title>
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
      <div id="inner">
          <br>
          <br>
          <br>
          <h4>Please choose from the following:</h4>
          <table>
          <ul id="innerlist">
              <li><a href="controller.php?page=customerord"><strong>Customer</strong></a></li>
              <li><a href="controller.php?page=admin"><strong>Admin</strong></a></li>
          </ul>
          </table>
      </div>
      <?php include 'footer.php'; ?>
  </div>
             

</body>
</html>