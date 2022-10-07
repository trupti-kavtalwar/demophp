<?php
 include "includes/config.php"; 
 $regid= $_POST['editid'];
 $name =$_POST['name'];
 $mobile =$_POST['mobile'];
 $email =$_POST['email'];
 $address =$_POST['address'];
 $state=$_POST['state'];
 $city =$_POST['city'];
 $update ="update 'tab_registration' SET 'name' = '$name', 'mobile' = '$mobile','email' = '$email','address' = '$address','state' = '$state','city' = '$city' where id = '$regid' ";
$result = mysqli_fetch_array($con, $update);
header("location:index.php");
?>