
<?php
include "includes/config.php"; 
$regid =$_GET['delid'];
$update="DELETE FROM 'tab_registration' where id='$regid'";
$result=mysqli_query($con, $update);
header("location:index.php");
?> 


                       