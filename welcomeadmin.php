<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Welcome Admin</title>
<link type="text/css" rel="stylesheet" href="master.css">
</head>
<body>
<div id="outermostdiv">
      <?php include 'header.html'; ?>
       <?php include 'navigator.html'; ?>
    <?php session_start(); ?>
      <div id="cartview">
      <p>The following orders have a status of being <span style="color:red">Ordered</span></p>
      
      <?php if(!isset($_SESSION['admin'])){ echo "There are no items with status ordered!"; }?>
      <?php if(isset($_SESSION['admin'])){ ?>
      <span style="color:yellow"><p>Note: Clicking on update status will prompt you to log in again</p></span>
      <table border="1">
      <tr><th>Order Number</th><th>User id</th><th>Total Price</th><th>Change Status To</th></tr>
         <form action="controller.php" method="get">
          <?php foreach($_SESSION['admin'] as $key => $item){ ?>
                    
          <input type="hidden" name="page" value="changestatus">
          <input type="hidden" name="ordernumber" value="<?php echo $item['ordernumber'] ?>">
                  <tr><td><?php echo $item['ordernumber'] ?></td><td><?php echo $item['userid'] ?></td><td><?php echo $item['total'] ?></td>
                  <td><select name="status">
                                                                                                                          <option value="Sent">Sent</option>
                                                                                                                        <option value="Delivered">Delivered</option>
                                                                                                                          </select></td><td><input type="submit" value="Update Status"></td></tr>
          <?php } ?>
          </form>
      </table>
      <?php } ?>
      <br>
      <table>
          <tr>
      <td><form action="destroyer.php" method="get">
        <input type="hidden" name="page" value="destroy">
        <input type="submit" value="Log Out">
      </form></td>
      
      </tr>
          </table>
      </div>
      <?php include 'footer.php'; ?>
  </div>

</body>
</html>