<?php
//session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function insertCustomer($firstname,$surname,$address1,$address2,$state,$city,$postcode,$country){
    require 'connection.php';
    $query="INSERT INTO customers(firstName,surName,addressOne,addressTwo,state,city,postcode,country) VALUES ('$firstname','$surname','$address1','$address2','$state','$city','$postcode','$country')";
    $con->exec($query);
    
}

function getMax($query){
    /*
    $datasource = 'localhost';
    $username ='root';
    $password ='';
    $dbhandle = mysql_connect($datasource, $username, $password) 
  or die("Unable to connect to MySQL");
    $selected = mysql_select_db("store",$dbhandle) 
  or die("Could not select examples");
    $result = mysql_query("SELECT max(customerid) as cust FROM customers");
    $row = mysql_fetch_assoc($result);
     * 
     */
    require 'connection.php';
    $max=$con->query($query);
    $maxres = $max->fetch();
    return $maxres['cust'];
}

function insertOrderline($productCode,$max,$productDescription,$productPrice,$quantity,$total){
    //
    require 'connection.php';
    
        $query="INSERT INTO orderline (productCode,userid,productDescription,productPrice,quantity,subtotal) VALUES ('$productCode','$max','$productDescription','$productPrice','$quantity','$total')";
        $con->exec($query);
    
}

function insertOrder($status,$total,$userid){
    require 'connection.php';
    $query="INSERT INTO orders (status,total,userid) values ('$status','$total','$userid')";
    $con->exec($query);
}

function getCustomerOrder($query,$query2){
    require 'connection.php';
    session_start();
    $result = $con->query($query);
    $key=0;
    
    
    foreach($result as $res){
        
            $_SESSION['cart'][$key]['id']=$res['productCode'];
            $_SESSION['cart'][$key]['name']=$res['productDescription'];
            $_SESSION['cart'][$key]['cost']=$res['productPrice'];
            $_SESSION['cart'][$key]['quantity']=$res['quantity'];
            $_SESSION['cart'][$key]['subtotal']=$res['subtotal'];
        
            //echo $_SESSION['cart'][$key]['id']."  ".$_SESSION['cart'][$key]['name']."   ".$_SESSION['cart'][$key]['cost']."   ".$_SESSION['cart'][$key]['quantity']."   ".$_SESSION['cart'][$key]['subtotal'];
        //echo "<br>";
        $key++;
        
    }
    $_SESSION['count']=$key;
    //echo "count: ".$_SESSION['count'];
    
    $status = $con->query($query2);
    $s = $status->fetch();
    return $s['status'];
}

function getAdminOrdered($query){
    require 'connection.php';
    session_start();
    //$query1 = "Select ordernumber,total,userid from orders where status='Ordered'";
    $result52 = $con->query($query);
    $key=0;
    //var_dump($result52);
    foreach($result52 as $res){
        $_SESSION['admin'][$key]['ordernumber']=$res['ordernumber'];
        $_SESSION['admin'][$key]['total']=$res['total'];
        $_SESSION['admin'][$key]['userid']=$res['userid'];
        echo $_SESSION['admin'][$key]['ordernumber']."   ".$_SESSION['admin'][$key]['total']."   ".$_SESSION['admin'][$key]['userid']."<br>";
        $key++;
        
    }   
    
}

function getModifiedOrder($query){
    require 'connection.php';
    $con->exec($query);
    //$result=destroySession();
    
}
/*
function destroySession(){
    session_destroy();
    return 1;
}
 * */
 
?>
