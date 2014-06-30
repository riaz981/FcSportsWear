<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Confirmation</title>
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
        <?php session_start(); ?>
          <div id="inner">
              <br><h4>Your details are as below:</h4>
              <table>
                  <tr><th align="left">Name: </th><td><?php echo $_SESSION['customer']['firstname']."  ".$_SESSION['customer']['surname'];?></td></tr>
                  <tr><th align="left">Address: </th><td><?php echo $_SESSION['customer']['address1'].",";?></td><td><?php echo $_SESSION['customer']['address2']; ?></td></tr>
                  <tr><th align="left">City: </th><td><?php echo $_SESSION['customer']['city']; ?></td></tr>
                  <tr><th align="left">State: </th><td><?php echo $_SESSION['customer']['state']; ?></td></tr>
                  <tr><th align="left">Postcode: </th><td><?php echo $_SESSION['customer']['postcode']; ?></td></tr>
                  <tr><th align="left">Country: </th><td><?php echo $_SESSION['customer']['country']; ?></td></tr>
                 
              </table>
              <P><strong>Your cart is as below:</strong></P>
              <table border="1">
              <th>Product Name</th><th>Product Price</th><th>Quantity</th><th>Subtotal</th>
              <?php if(isset($_SESSION['cart'])){ ?>
               <?php foreach($_SESSION['cart'] as $key => $item){ ?>
              <tr><td><?php echo $item['name'] ?></td><td><?php echo $item['cost'] ?></td><td><?php echo $item['quantity'] ?></td><td><?php echo $item['total'] ?></td></tr>
             <?php }}?>
              </table>
              <?php
                $total=0;
                $count=0;
                foreach($_SESSION['cart'] as $items){
                    $total += $items['total'];
                    $count++;
                }?>
              <table>
                  <tr><th>Total Purchase Price:</th><td><?php echo "$".$total; ?></td></tr>
              </table>
              <table>
                  <tr><td><form action="controller.php" method="get">
                      <input type="hidden" name="page" value="confirmation">
                      <input type="submit" value="Checkout">
                  </form></td>
                  <td>
                 
                      <form action="destroyer.php" method="get">
                          <input type="hidden" name="page" value="destroy">
                          <input type="submit" value="Cancel Transaction">
                      </form>   
                  </td>
                  </tr>
              </table>
          </div>
      <?php include 'footer.php'; ?>
      </div>
</body>
</html>