<?php

$page = $_REQUEST['page'];

if($page == "productcat"){
    echo "Hello you are in productcat";
    $category = $_GET['pagecategory'];
    if($category == '101'){
        header("Location: productList.php?category=101");
       // exit();
    }
    elseif ($category == '102') {
        header("Location: productList.php?category=102");
    }
    
    elseif ($category == '103') {
        header("Location: productList.php?category=103");
    }
    
    elseif ($category == '104') {
        header("Location: productList.php?category=104");
    }
    
    elseif ($category == '105') {
        header("Location: productList.php?category=105");
    }
    
    elseif ($category == '106') {
        header("Location: productList.php?category=106");
    }

}
    elseif($page == "productDetail"){
        $productcode = $_GET['productcode'];
        header("Location: productDetails.php?productcode=$productcode");
    }
    
    elseif($page=="viewCart"){
        header("Location: category.php");
    }
    
    elseif($page=="countcheck"){
        $count=$_GET['count'];
        if($count>0)
            header("Location: form.php");
        else{
            
            header("Location: cart.php");
        }
    }
    
    elseif($page == "setQuantity"){
        //require 'connection.php';
        session_start();
        $key = $_REQUEST['productcode'];
        $productdescription = $_REQUEST['productDescription'];
        $productprice = $_REQUEST['productPrice'];
        $quantity = $_REQUEST['Quantity'];
        $flag = FALSE;
        $total=0;
        
     
        if($quantity ==0 || $quantity <0){
            if(isset($_SESSION['cart'][$key])){
                unset($_SESSION['cart'][$key]);
            }
        }
        
        elseif($quantity>0){
            
                    if(isset($_SESSION['cart'][$key])){
                        
                        $_SESSION['cart'][$key]['quantity']=$quantity;
                        
                        $_SESSION['cart'][$key]['cost'] = $productprice;
                        $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['quantity'];
                    }

                    else{
                        $_SESSION['cart'][$key]['id'] = $key;
                        $_SESSION['cart'][$key]['name'] = $productdescription;
                        $_SESSION['cart'][$key]['quantity'] = $quantity;
                        $_SESSION['cart'][$key]['cost'] = $productprice;
                        $_SESSION['cart'][$key]['total'] = $_SESSION['cart'][$key]['cost'] * $_SESSION['cart'][$key]['quantity'];

                    }
        }
        header("Location: cart.php");
        /*
        	if(!isset($_SESSION['cart']))
                {
                    $_SESSION['num'] = 0;
                }
                else{
                    $_SESSION['num'] += 1;
                }
                //$subtotal = $productprice * $quantity;
                for($j=0; $j<=$_SESSION['num']; $j++) //using for loop and comparing the id with each array
                {
                    if(isset($_SESSION['cart']))	
                    {
                        if(isset($_SESSION['cart']['cartProductId'][$j]))	
                        {
                            if($_SESSION['cart']['cartProductId'][$j] == $productCode) //if that id already exists, add the quiantity.
                            {
                                $_SESSION['cart']['cartProductQuantity'][$j] += $quantity;
                                
                                $subtotal = $_SESSION['cart']['cartProductSubtotal'][$j] * $quantity;
                                $_SESSION['cart']['cartProductSubtotal'][$j] = $subtotal;
                                $flag = TRUE; //set the flag to true to not update all records again as below
                            }
                        }
                    }
                }
                	if($flag == FALSE) //since flag is false the product id does not already exist. in that case add all records to the next array.
                        {   
                            //$subtotal = $productprice * $quantity;
                            $_SESSION['cart']['cartProductName'][$_SESSION['num']] = $productdescription;
                            $_SESSION['cart']['cartProductId'][$_SESSION['num']] = $productCode;
                            $_SESSION['cart']['cartProductPrice'][$_SESSION['num']] = $productprice;
                            $_SESSION['cart']['cartProductSubtotal'][$_SESSION['num']] = $_SESSION['cart']['cartProductPrice'][$_SESSION['num']] * $quantity;
                            $_SESSION['cart']['cartProductQuantity'][$_SESSION['num']] = $quantity;
                        }
                for($i=0; $i<=$_SESSION['num']; $i++)
                {
                    if(isset($_SESSION['cart']['cartProductId'][$i]))	
                    {
                        $total += ($_SESSION['cart']['cartProductPrice'][$i] * $_SESSION['cart']['cartProductQuantity'][$i]);
                    }
                }
                
                $_SESSION['total'] = $total;
                header("Location: cart.php");
    }
    elseif($page == "updateCart"){
        session_start();
        $productcode = $_REQUEST['productcode'];
        $quantity = $_REQUEST['quantity'];
        
        if(isset($_SESSION['cart']))	
        {
                if(isset($_SESSION['cart'][$productcode]{
                            if($quantity <=0){
                                unset($_SESSION['cart'][$productcode]);
                            }
                            else{
                                
                            }
                        }
        }*/
    }
    elseif($page=="customer"){
        session_start();
        $firstname = $_REQUEST['fname'];
        $surname = $_REQUEST['surname'];
        $address1 = $_REQUEST['address1'];
        $address2 = $_REQUEST['address2'];
        $city = $_REQUEST['city'];
        $state= $_REQUEST['state1'];
        $postcode= $_REQUEST['pcode'];
        $country = $_REQUEST['country'];
        $creditcard = $_REQUEST['cCredit'];
        
        
        
        $_SESSION['customer']['firstname']=$firstname;
        $_SESSION['customer']['surname']=$surname;
        $_SESSION['customer']['address1']=$address1;
        $_SESSION['customer']['address2']=$address2;
        $_SESSION['customer']['state']=$state;
        $_SESSION['customer']['city']=$city;
        $_SESSION['customer']['postcode']=$postcode;
        $_SESSION['customer']['country']=$country;
        $_SESSION['customer']['creditcard']=$creditcard;
        
        header("Location: confirmation.php");
        
    }
    
    elseif($page=="confirmation"){
        session_start();
        require 'connection.php';
        require 'database.php';
        $firstname=$_SESSION['customer']['firstname'];
        $surname=$_SESSION['customer']['surname'];
        $address1=$_SESSION['customer']['address1'];
        $address2=$_SESSION['customer']['address2'];
        $state=$_SESSION['customer']['state'];
        $city=$_SESSION['customer']['city'];
        $postcode=$_SESSION['customer']['postcode'];
        $country=$_SESSION['customer']['country'];
        $creditcard=$_SESSION['customer']['creditcard'];
        insertCustomer($firstname,$surname,$address1,$address2,$state,$city,$postcode,$country);
        $query="SELECT MAX(customerid) as cust FROM customers";
        $max = getMax($query);
        //echo $max;
        foreach($_SESSION['cart'] as $key => $item){ 
        echo $item['id']."   ".$max."   ".$item['name']."   ".$item['cost']."   ".$item['quantity']."   ".$item['total'];
        insertOrderline($item['id'],$max,$item['name'],$item['cost'],$item['quantity'],$item['total']);
        echo "<br>";
        }
        $total=0;
        foreach($_SESSION['cart'] as $items){
        $total += $items['total'];
        //$count++;
        }
        $status="Ordered";
        insertOrder($status,$total,$max);
        header("Location: thankyou.php?maxvalue=$max");
    }
    
    elseif($page=="customerord"){
        $message="";
        header("Location: customer.php?message=$message");
    }
    
    elseif($page=="custorder"){
        require 'database.php';
        $flag = TRUE;
        $message="";
        $ordernumber = $_REQUEST['ordernumber'];
        if($ordernumber==""){
            $message="Please enter an order number!";
            header("Location: customer.php?message=$message");
        }
        else{
        $query = "SELECT * from orderline where userid=$ordernumber";
        $query2 = "Select status from orders where userid=$ordernumber";
        $status=getCustomerOrder($query,$query2);
        header("Location: customerstatus.php?status=$status");
        }
    }
    
    elseif($page=="admin"){
        $message="";
        header("Location: adminlogin.php?message=$message");
    }
    
    elseif($page=="administrator"){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if($username != "admin" || $password != "admin"){
            $message = "Please enter a valid username and password!";
            header("Location: adminlogin.php?message=$message");
        }
         else { 
             require 'database.php';
             //destroySession();
             $status="Ordered";
             $query="Select * from orders where status='$status'";
             getAdminOrdered($query);
             //$message="Hello!";
             header("Location: welcomeadmin.php");
        }
    }
    
    elseif($page=="changestatus"){
        require 'database.php';
        session_destroy();
        $ordernumber = $_REQUEST['ordernumber'];
        $status = $_REQUEST['status'];
        
        $query = "Update orders SET status ='$status' where ordernumber='$ordernumber'";
        getModifiedOrder($query);
        $query1="Select * from orders where status='Ordered'";
        getAdminOrdered($query1);
        header("Location: destroyadmin.php");
    }
    
    elseif($page=="welcomeback"){
        header("Location: welcomeadmin.php");
    }
    
    elseif($page=="sendemail"){
        $to = "riaz.hasan@yahoo.com.au";
        $from=$_REQUEST['email'];
        $firstname=$_REQUEST['fname'];
        $surname=$_REQUEST['sname'];
        $phone=$_REQUEST['cnum'];
        $subject=$_REQUEST['subject'];
        $textdetail=$_REQUEST['textdetail'];
        $headers = "Content-Type: text/html; charset='iso-8859-1'; Content-Transfer-Encoding: 7bit";
        
        $message="<html><body>";
        $message .="<p>Dear Riaz, </p>";
        $message .="<p>You have got mail from <strong>$firstname $surname</strong>. </p>";
        $message .="<p><strong>Email:</strong> $from and contact number is: <strong>$phone</strong>. </p>";
        $message .="<p><strong>Subject:</strong> $subject </p>";
        $message .="<p>Message goes like this: </p>";
        $message .="<p>$textdetail</p>";
        $message .="<p>======================</p>";
        $message .="<p>Php program: May i recommend that you respond to this message. Over and out...</p>";
        $message .="</body></html>";
        mail($to, $subject, $message, $headers, $from);
        header("Location: thankcontact.php");
    }
//next else if
?>
