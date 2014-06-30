<?php
session_start();
session_destroy();
header("Location: controller.php?page=admin");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
