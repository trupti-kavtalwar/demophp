<!Doctype HTML>
<html>
    <head>
        <title> Crud Operation </title>
        <link href="css/style.css"rel="stylesheet"/>
    </head>
    </head>
    <body>
        <form action="textform.php" method="post">
            Name :<input type="text" name="name"><br><br>
            Age : <input type="text" name="age"><br><br>
            Gender :<br>
                    <input type="radio" id="male" name="gender" value="male" >
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female" >
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other" >
                    <label for="other">Other</label><br><br>
                    <input type="submit"name="save"/>
        </form>
    </body>
</html>
