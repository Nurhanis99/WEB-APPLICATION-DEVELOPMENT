<?php

if (isset($_POST["submit"])){
    include 'dbconnect.php';
    $email = $_POST["email"];
    $pass =  $_POST["pass"];
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass'");
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    if ($number_of_rows > 0) {
        session_start();
        $_SESSION["sessionid"] = session_id();
        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('php/mainpage.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>
    <script src="Javascript/script.js"></script>
    <title>LOG IN</title>
    </head>

    <body onload="loadCookies()">
        <div class="w3-header w3-container w3-black w3-padding-16 w3-center">
            <div class="image-container">
                <div class="text"> Kedai Roti Canai Pak Jabar <br> (Gerai No.7)
                </div>
            </div>
        </div>
        <div class="w3-container w3-padding-64 form-container">
            <div class="w3-card-4 w3-round">
                <div class="w3-container w3-black">
                    <h2 style="font-weight:500; font-size:xx-large;">Login</h2>
                </div>   

                <form name="loginForm" class="w3-container" action="login.php" method="post">
                    
                
                    <i class=" input-container fa fa-envelope icon"></i>    
                    <label class="w3-text-black"><b>Email</b></label>
                        <input class="w3-input w3-border w3-round" name="email" type="email" id="idemail" required>
                     </p>
                    <p>
                    <i class=" input-container fa fa-key icon"></i>
                        <label class="w3-text-black"><b>Password</b></label>
                        <input class="w3-input w3-border w3-round" name="pass" type="password" id="idpass" required>
                    </p>
                    <p>
                        <input class="w3-check" type="checkbox" id="idremember" name="remember" 
                        onclick="rememberMe()">
                        <label>Remember Me</label>
                    </p>
                    <p>
                        <button class="w3-btn w3-round w3-black w3-block" style="font-weight:bolder; font-size:medium;" name="submit">Login</button>
                    </p>
                    <p>
                        Don't have an account? <a href="signup.php" style="font-weight:bolder;">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
   
    <footer class="w3-container w3-black w3-center">
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>

    </footer>
    </body>
</html>