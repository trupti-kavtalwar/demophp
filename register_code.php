<?php 
include "includes/config.php";

@extract($_POST);
$sql = " INSERT INTO `tab_registration`(`name`, `mobile`, `email`, `address`, `state`, `city`, `create_date`) 
            VALUES ('$name','$mobile','$email','$address','$state','$city', now())";
$result = mysqli_query($con, $sql);
header("location:index.php");
?>
