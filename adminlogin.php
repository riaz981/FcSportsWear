<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Login</title>
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
    <?php $message ="";
    $message=$_REQUEST['message'];?>
      <div id="formview1">
      <br>
      <p><h4>Please enter your username and password:</h4></p>
      <p><span style="color:red"><?php if(isset($message)) echo $message ?></span></p>
          <table>
              <form action="controller.php" method="post">
                  <input type="hidden" name="page" value="administrator">
                 
                  <br>
                 
                  <tr><td>Username: </td><td><input type="text" name="username" placeholder="Enter User ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter User ID'"></td></tr>
                  <tr><td>Password: </td><td><input type="password" name="password" placeholder="Enter Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'"></td></tr>
                  <tr><td></td><td><input type="submit" value="Log In"><input type="reset" value="Reset"></td></tr>
              </form>
          </table>
         
         
      </div>
      <?php include 'footer.php'; ?>
  </div>

</body>
</html>