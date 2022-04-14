<?php

require_once '../include/header.php';

?>

<body>
    <div class="login">

        <h2>Registration</h2>

        <form method=post id="login" action="" enctype="multipart/form-data">

            <label> Firstname : </label></td><br>
            <input type="text" name="firstname" required /> <br><br>

            </tr>
            <label> Lastname: </label><br>
            <input type="text" name="lastname" required /> <br> <br>

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