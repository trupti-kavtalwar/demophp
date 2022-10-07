<?php
include "includes/config.php"; 
$id= $_GET['id'];
$sql = "select * from tab_registration where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="css/style.css"rel="stylesheet"/> -->
    </head>
   <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10 mt-auto">
                <div class="card">
                    <div class="card-title" >
                        <h2 class="text-center py-2">Crud Operation</h2>
                        <div style="float:right; padding-right:40px "><a href="add.php"><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                    </div>
                    <div >
                      
                        <table class="table"  border-collapse="collapse">
                            <tr>
                                <th >SR NO.</th>
                                <th>NAME</th>
                                <th>MOBILE NO.</th>
                                <th>EMAIL</th>
                                <th>ADDRESS</th>
                                <th>STATE</th>
                                <th>CITY</th>
                                <th>ACTION</th>
                            </tr>
                          
                            <?php
                                $sql = "select * from tab_registration";
                                $result = mysqli_query($con,$sql);
                                $i=1;
                                while($rows=mysqli_fetch_array($result))
                                {
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $rows['name']?></td>
                                <td><?php echo $rows['mobile']?></td>
                                <td><?php echo $rows['email']?></td>
                                <td><?php echo $rows['address']?></td>
                                <td><?php echo $rows['state']?></td>
                                <td><?php echo $rows['city']?></td>
                                <td><a href="edit-registration.php?id<?php echo $rows['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;
                                    <a href="update.php?editid<?php echo $rows['id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp;
                                    <a href="delete.php?delid<?php echo $rows['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                              <?php  }?>
                              <hr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

        
        
