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
</head>
<body>
  <div id="outermostdiv">
  <?php include 'header.html'; ?>
  <?php include 'navigator.html'; ?>
  <?php session_start(); ?>
 
  <div id="cartview">
  <p>Your cart is as follows, you can also make modifications to your cart:</p>
  <?php if(isset($_SESSION['cart'])){ ?>
  <span style="color:red"><?php if(count($_SESSION['cart'])==0){echo "Your cart is empty"; }?></span>
  <table border="1">
  <th>Product Code</th><th>Product Name</th><th>Product Price</th><th>Subtotal</th><th>Quantity</th>
  
  <?php foreach($_SESSION['cart'] as $key => $item){ ?>
  <tr>
  <td><?php echo $item['id'] ?></td><td><?php echo $item['name'] ?></td><td><?php echo $item['cost'] ?></td><td><?php echo $item['total'] ?></td>
  <td width="25%"><form action="controller.php" method="get">
  <input type="hidden" name="page" value="setQuantity">
  <input type="hidden" name="productcode" value = "<?php echo $item['id']?>">
  <input type="hidden" name="productPrice" value = "<?php echo $item['cost']?>">
  <input type="text" size = "5" name="Quantity" value="<?php echo $item['quantity']?>">
  <input type="submit" value="Update">
  </form>
  </td>
  <td>
  <form action="controller.php" method="get">
  <input type="hidden" name="page" value="setQuantity">
  <input type="hidden" name="productcode" value="<?php echo $item['id'] ?>">
  <input type="hidden" name="Quantity" value="0">
  <input type="submit" value="Remove">
   	</form>
  </td>
  </tr>
  <?php } ?>
  
  </table>
  <?php
    $total=0;
    $count=0;
    foreach($_SESSION['cart'] as $items){
        $total += $items['total'];
        $count++;
    }?>
  <table border="2">
  <tr>
  <td>Total: </td><td><?php echo $total; ?></td>
  </tr>
  </table>
    
    

    
  
  
  
  
  <table>
  <tr>
  <td>
  <ul class="button">
  <li><a href="controller.php?page=viewCart">Back To Categories</a></li>
  </ul>
  </td>
  <td><ul class="button">
  <li><a href="controller.php?page=countcheck&count=<?php echo $count ?>">Proceed to Checkout</a></li>
  </ul></td>
  </tr>
  </table>
  <?php
    } 
    
    if(!isset($_SESSION['cart'])){?>
        <span style="color:red"><?php echo "Your cart is empty";?></span>
        <table>
  <tr>
  <td>
  <ul class="button">
  <li><a href="controller.php?page=viewCart">Back To Categories</a></li>
  </ul>
  </td>
  </table>
            <?php
    }
    ?>
  
  
  </div>
  <?php include 'footer.php'; ?>
  </div>
</body>
</html>














