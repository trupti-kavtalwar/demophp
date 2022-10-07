<?php
include "includes/config.php"; 
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6 mt-auto">
            <div class="card">
                <div class="card-title" >
                    <h2 class="text-center py-2">Registraition Edit Form</h2>
                </div>
                <div class="card-body">
                    <form action="register_code.php" method="post">
                        <table class="table">
                            <tr>
                                <td> FullName</td>
                                <td>:</td>
                                <td><input type="text" id="fullname" name="name" class="form-control mt-2" required></td>
                            </tr>
                            <tr>
                                <td>Mobile No.</td>
                                <td>:</td>
                                <td><input type="text" id="mobile" name="mobile" class="form-control mt-2" required></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input type="email" id="email" name="email" class="form-control mt-2" required></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td><textarea name="msg" id="msg" cols="8" rows="3" class="form-control mt-2" required></textarea></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>:</td>
                                <td><select id="state" name="state" class="form-control mt-2">
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Benguluru">Benguluru</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>:</td>
                                <td><input type="radio" id="city" value="aheri" name="city" required>Aheri &nbsp;
                                    <input type="radio" id="city" value="gadchirolli" name="city" required >Gadchirolli &nbsp;
                                    <input type="radio" id="city" value="sironcha" name="city" required>Sironcha
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2"><input type="submit" value="save" name="submit" class="btn btn-success">&nbsp;
                                <input type="reset" value="reset" name="reset" class="btn btn-info"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
