<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$datasource = 'mysql:host=localhost;dbname=store';
$username ='root';
$password ='';

try{
    $con = new PDO($datasource, $username, $password);
    
}

catch(PDOException $e){
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>
