<?php
if (isset($_POST["submit"])) {
    include 'dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = ($_POST["pass"]);
    $sqlsignup = "INSERT INTO `tbl_users`(`name`, `email`, `pass`) VALUES('$name', '$email', '$pass')";
     try {
        $conn->exec($sqlsignup);
        //if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
        //uploadImage($idno);
        //}
        echo "<script>alert('Sign Up Successful')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Sign Up Failed')</script>";
        //echo "<script> window.location.replace('newcustomer.php')</script>";

    //}
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
    <title>SIGN UP</title>
    </head>

    <body>
        <div class="w3-header w3-container w3-black w3-padding-16 w3-center">
            <div class="image-container">
                <div class="text"> Kedai Roti Canai Pak Jabar <br> (Gerai No.7)
                </div>
            </div>
        </div>
        <div class="w3-container w3-padding-64 form-container">
            <div class="w3-card-4 w3-round">
                <div class="w3-container w3-black">
                    <h2 style="font-weight: 500; font-size:xx-large;">Sign Up</h2>
                </div>   

                <form name="loginForm" class="w3-container" action="signup.php" method="post">
                <p>
                        <i class="input-container fa fa-user icon"></i>
                        <label class="w3-text-black"><b>Name</b></label>
                        <input class="w3-input w3-border w3-round" name="name" type="text" id="idname" required>
                     </p>
                    <p>
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
                        <button class="w3-btn w3-round w3-black w3-block" style="font-weight:bold;" name="submit">Sign Up</button>
                    </p>
                    <p>
                        Already have an account? <a href="login.php" style="font-weight:bold;" >Login</a><br>
                    </p>
                </form>
            </div>
        </div>
   
    <footer class="w3-container w3-black w3-center">
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>

    </footer>
    </body>
</html>