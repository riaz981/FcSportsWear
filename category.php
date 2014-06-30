<!DOCTYPE html>
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
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="animation.js"></script>
</head>
<body>
  <div id="outermostdiv">
      <?php include 'header.html'; ?>
      <?php include 'navigator.html'; ?>
      <div id="inner">
          <br>
          <br>
          <br>
          <br>
          
          <strong>Please choose from the following categories:</strong>
          <table>
          <ul id="innerlist">
              <?php
                require 'connection.php';
                $category=0;
                $query = 'SELECT * from categories;';
                $categories = $con->query($query);?>
                <?php foreach($categories as $category){
              ?>
              <li><a href="controller.php?page=productcat&pagecategory=<?php echo $category['categoryid'] ?>"><strong><?php echo $category['categoryName'] ?></strong></a></li>
          <?php } ?>
          </ul>
          </table>
      </div>
      <?php include 'footer.php'; ?>
  </div>
 
</body>
</html>