<?php
         $to = "truptikavatalwar@gmail.com";
         $subject = $_POST['subject'];
         
         $message = "<b>enquiry mail.</b>";
         $message .="<b>Name</b>". $_POST['uname'];
         $message .="<b>Email</b>". $_POST['email'];
         $message .= "<b>Mobile</b>". $_POST['mobile'];
         $message .="<b>Message</b>". $_POST['msg'];
       
         $header = "From:trupti.kavtalwar@raisoni.net \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
          $msg=  "Message sent successfully...";
         }else {
            $msg=  "Message could not be sent...";
         }
      ?>
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <div class="row justify-content-center mt-5"> 
            <div class="col-md-6 mt-auto">
                <div class="card">
                    <div class="card-title" >
                        <h2 class="text-center py-2">Thank You</h2>
                        <hr>
                    </div>
                
                    <div class="card-body">
                        <h3 class="text-center" > <?php echo $msg; ?></h3>
                    </div>
                </div>
            </div>
        </div>
   </div> 
</body>
</html>