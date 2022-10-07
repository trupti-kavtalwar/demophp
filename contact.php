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
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                    </div>
                
                <div class="card-body">
                    <form action="thank-you.php" method="post">
                        <input type="text" id="Uname" name="uname" placeholder="Name" class="form-control mt-2" required>
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control mt-2" required>
                        <input type="text" id="mobile" name="mobile" placeholder="Mobile" class="form-control mt-2" required>
                        <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control mt-2" required>
                        <textarea name="msg" id="msg" cols="20" rows="3" class="form-control mt-2" placeholder="Enter Your Massage" required></textarea>
                        <input type="submit"value="submit" class="btn btn-success mt-2"> &nbsp;
                        <input type="reset"value="reset" class="btn btn-primary mt-2">
                    </form>
                </div>
                </div>
            </div>
        </div>
   </div> 
</body>
</html>