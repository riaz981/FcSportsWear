<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Track Order</title>
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
      <?php $message="";
            $message=$_REQUEST['message'];?>
      <div id="inner">
          <br>
          <br>
          <p>Please enter the order number to view status:</p>
            <?php if(isset($message)){?>
           <p><span style="color:red"><?php  echo $message ?></span></p>
           <?php } ?>
          <form action="controller.php" method="post">
              <input type="hidden" name="page" value="custorder">
              <table>
                  <tr><td>Order Number:</td><td><input type="text" name="ordernumber" placeholder="Enter Order Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Order Number'"></td><td><input type="submit" value="Track Order"></td>
              </table>
          </form>
      </div>
      <?php include 'footer.php'; ?>
  </div>

</body>
</html>
