<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Customer Status</title>
<link type="text/css" rel="stylesheet" href="master.css">
</head>
<body>
    <div id="outermostdiv">
      <?php include 'header.html'; ?>
        <?php include 'navigator.html'; ?>
        <?php 
        session_start();
        $status = $_REQUEST['status']; ?>
      <div id="innerindex">
      <br>
      <br>
      <br>
      <br>
          <table>
          <tr><td>The status of your order is: <span style="color:red"><?php echo $status ?></span></td></tr>
          </table>
          <span style="color:red"><?php if(!isset($_SESSION['cart'])){ echo "<p>"."This order does not exist"."</p>";}?></span>
          <br>
          <br>
          <?php if(isset($_SESSION['cart'])){ ?>
          <table border="1">
              <th>Product Code</th><th>Product Name</th><th>Product Price</th><th>Subtotal</th><th>Quantity</th>
              
              <?php foreach($_SESSION['cart'] as $key => $item){ ?>
              <tr>
                  <td><?php echo $item['id'] ?></td><td><?php echo $item['name'] ?></td><td><?php echo $item['cost'] ?></td><td><?php echo $item['subtotal'] ?></td><td><?php echo $item['quantity'] ?></td>
              </tr>
              <?php } } ?>
              
          </table>
          <br>
         
          <form action="destroyer.php" method="get">
        <input type="hidden" name="page" value="destroy">
        <input type="submit" value="Home">
    </form>
      </div>
      <?php include 'footer.php'; ?>
  </div>

</body>
</html>