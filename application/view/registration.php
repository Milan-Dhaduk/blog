<?php
    include "../../public/assets/style.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>

    <div class="login">

        <h2>Registration</h2>

        <form method=post id="login" action="" enctype="multipart/form-data">

            <label> Firstname : </label></td><br>
            <input type="text" name="name" required /> <br><br>

            </tr>
           

            <label> Email :</label><br>
            <input type="email" name="email" /> <br> <br>


            <label> Password :</label><br>
            <input type="Password" name="pass" minlength="2" maxlength="10"> <br><br>

            <label> Confirm Password :</label><br>
            <input type="Password" name="cpass" minlength="2" maxlength="10"> <br><br>

           


            <input type="submit" name="submit" value="submit" class="log" /><br>


    </div>
    </form>

</body>
</html>