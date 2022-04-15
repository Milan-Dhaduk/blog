<?php

require_once '../include/header.php';

?>

<body>
    <div class="login">

        <h2>Login</h2>
        <form method=post id="login" action="">

            <label><b>Email
                </b> <br>
            </label>
            <input type="email" name="email" id="emails" /> <br> <br>


            <label><b>Password
                </b><br>
            </label>

            <input type="Password" name="pass" id="pass"> <br><br>

            <button name="login" class="log"> Login </button><br>
            <br>

            <!-- <a href="forgot.php">Forgotten password?</a><hr> -->
            <p>
                <a href="">New Registration</a>
            </p>
    </div>
    </form>
</body>

</html>