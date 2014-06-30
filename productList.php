<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Product List</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
<![endif]-->
<!--[if !IE]><!-->
	<link type="text/css" rel="stylesheet" href="master.css">
 <!--<![endif]-->
<link type="text/css" rel="stylesheet" href="products.css">
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="animation.js"></script>
</head>
<body>
<div id="outermostdiv">
      <?php include 'header.html'; ?>
      <?php include 'navigator.html'; ?>
     <?php
                require 'connection.php';
                $product=0;
                $i=0;
                $category = $_GET['category'];
                $query = "SELECT * from products where categoryid=$category";
                $product = $con->query($query);?>
                
      <div class="riaz">
     
      <table id="tableanimate">
      <tr>
     
      <?php foreach($product as $products){  ?>
      <?php if($i !=0 && $i%4==0){ ?></tr><tr><?php } ?>
          <td><div class="img"><a href="controller.php?page=productDetail&productcode=<?php echo $products['productCode'] ?>"><img src="<?php echo $products['images'] ?>" width="110" height="70">
           <p><?php echo $products['productDescription'] ?></p>
           </a>
              <p>Price: $<?php echo $products['productPrice'] ?></p>         
           
          </div>
          </td>
          
      <?php $i++; } ?>
     
      </tr>
      </table>
     
     
   

</div>
<?php include 'footer.php'; ?>
</div> 
</body>

</html>
