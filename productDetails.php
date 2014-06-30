<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>FC SportsWear</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
<![endif]-->
<!--[if !IE]><!-->
	<link type="text/css" rel="stylesheet" href="master.css">
 <!--<![endif]-->
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script src="jquery.validate.min.js"></script>
 <script src="additional-methods.min.js"></script>
 <script src="prodDetails.js"></script>
</head>
<body>
  <div id="outermostdiv">
      <?php include 'header.html'; ?>
      <?php include 'navigator.html'; ?>
      <?php 
        require 'connection.php';
        $productcode=$_REQUEST['productcode'];
        $query = "SELECT productCode, productDescription, productDescriptionTwo, productPrice from products where productCode = $productcode";
        $product = $con->query($query);
        $products = $product->fetch();
        ?>
      
      <div id="tabledescript">
          <strong>Product Details:</strong>
          <br>
      <table id="tableOne">
          <tr><th><strong>Product Code: </strong></th><td><?php echo $products['productCode'] ?></td></tr>
          <tr><th><strong>Product Name: </strong></th><td><?php echo $products['productDescription'] ?></td></tr>
          <tr><th><strong>Product Description: </strong></th><td><?php echo $products['productDescriptionTwo'] ?></td></tr>
          <tr><th><strong>Product Price: </strong></th><td><?php echo "$".$products['productPrice'] ?></td></tr>
      </table>
          
      <table>
          <tr><td>
      <form action="controller.php" id="details" name="details" method="get">
          <input type="hidden" name="page" value="setQuantity">
          <input type="hidden" name="productcode" value="<?php echo $products['productCode'] ?>">
          <input type="hidden" name="productDescription" value="<?php echo $products['productDescription'] ?>">
          <input type="hidden" name="productPrice" value="<?php echo $products['productPrice'] ?>">
          <strong>Enter Quantity:</strong><input type="text" size="5" id="Quantity" name="Quantity"></td></tr></table><table><tr><td><input type="submit" id="submit" value="Submit"></td>
         
      </form>
              
       <td>
           <div id="mover">
      <form action="destroyer.php" method="get">
          <input type="submit" value="Cancel">
      </form>
           </div>   </td></tr>
      </table>
          
          
      </div>
      <?php include 'footer.php'; ?>
  </div>
 
</body>
</html>