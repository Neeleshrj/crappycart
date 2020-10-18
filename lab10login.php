<?php

session_start();

require 'dbconfig/config.php';
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
</head>

<body style="font-family: Courier New;">

    <div id="loginform" style="width: 1000px;margin-left:15%">
        <center>

            <form class="myform" action="lab10login.php" method="post">

                <input name="email" type="text" class="inputvalues" placeholder="email" required /> <br>

                <input name="pass" type="password" class="inputvalues" placeholder="Password" required /><br>

                <input name="login" type="submit" id="login_btn" value="Login" />

                <p>Not a user yet?</p>
                <a href="lab10register.php"><input type="button" id="register_btn" value="Register" />

            </form>
        </center>
        <?php

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $query = "SELECT * FROM userinfo WHERE email='$email' AND pass='$pass'";

            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                $row = mysqli_fetch_assoc($query_run);
                $_SESSION['email'] = $row['email'];
                //$_SESSION['cart']=array();
                $_SESSION['cname']=array();
                $_SESSION['cprice']=array();
                header('location:lab10cart.php');
            } else {
                echo '<script type="text/javascript"> alert("Invalid Credentials!") </script>';
            }
        }

        ?>

    </div>
</body>


</html>