<?php
require_once '../dbConnection.php';
require_once 'php/validation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="loginMainDiv">
                <div class="loginContainer">
                    <div class="logoContainer">
                        <div class="logBox">
                            <img src="../images/chbc-logo.png" alt="" srcset="">
                        </div>
                        <p>CHBC DASHBOARD LOGIN</p>
                    </div>
                    <form action="login.php" method="POST">
                        <div class="loginInput">
                            <div class="logImg"><img src="../images/mdi_user.png" alt=""></div><input type="text" name="userName" value="" placeholder="username">
                        </div>
                        <div class="loginInput">
                            <div class="logImg"><img src="../images/material-symbols_key.png" alt=""></div><input type="password" name="userPass" value="" placeholder="password">
                        </div>
                            <input type="submit" name="submit" value="SUBMIT">
                    </form>
                    <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] === "emptyInput"){
                                echo "<p style='color: red;'>User input is empty</p>";
                            }

                            if($_GET['error'] === "notAllowed"){
                                echo "<p style='color: red;'>Invalid user string</p>";
                            }

                            if($_GET['error'] === "wrongUser"){
                                echo "<p style='color: red;'>Invalid user</p>";
                            }

                            if($_GET['error'] === "wrongpass"){
                                echo "<p style='color: red;'>Wrong Password</p>";
                            }
                        }
                    ?>
                </div>
        </div>
    </main>
</body>
</html>