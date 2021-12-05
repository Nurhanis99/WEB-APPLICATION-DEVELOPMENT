<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script> alert ('Session not available. Please login');</script>";
    echo "<script> window.location.replace('../login.php')</script";
}
if (isset($_POST["submit"])) {
    include_once ("../dbconnect.php");
    $name = $_POST["name"];
    $idno = $_POST["idno"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $sqlregister = "INSERT INTO `tbl_customers`(`id`, `name`, `gender`, `email`, `phone`, `address`) 
    VALUES('$idno', '$name', '$gender', '$email', '$phone', '$address')";
     try {
        $conn->exec($sqlregister);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
        uploadImage($idno);
        }
        echo "<script>alert('Registration Successful')</script>";
        echo "<script>window.location.replace('mainpage.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration Failed')</script>";
        echo "<script> window.location.replace('newcustomer.php')</script>";

    }
}
function uploadImage($id) {
    $target_dir = "../res/images/";
    $target_file = $target_dir . $id . ".png";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../javascript/script.js"></script>

    <title>New Customer</title>
    </head>

    <body>
    <div class="w3-header w3-container w3-black w3-padding-16 w3-center">
            <div class="image-container">
                <div class="text">Kedai Roti Canai Pak Jabar <br> (Gerai No.7)
                </div>
            </div>
    </div>
    <div class="navbar">
        <a href="mainpage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="../login.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a> 
    </div>

   

    <div class="w3-container w3-padding-64 form-container-reg">
        <div class="w3-card">
            <div class="w3-container w3-black">
                <p> New Customer Registration</p>
            </div>
            <form class="w3-container w3-padding" name="registerForm" action="newcustomer.php" method="POST" enctype="multipart/form-data" onsubmit="return confirmDialog()">
                <div class="w3-container w3-border w3-center w3-padding">
                    <img class="w3-image w3-round w3-margin" src="../res/images/user.png" style="width: 100%; max-width: 600px;"><br>
                    <input type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"><br>
                </div>
                
                <p>
                    <i class="fa fa-user icon"></i>
                    <label>Name</label>
                    <input class="w3-input w3-border w3-round" name="name" id="idname" type="text" required>
                </p>
                <p>
                    <i class="fa fa-id-card icon"></i>
                    <label>IC/Passport Number</label>
                    <input class="w3-input w3-border w3-round" name="idno" id="idid" type="text" required>
                </p>
                <p>
                    <i class=" fa fa-male icon"></i>
                    <label>Gender</label>
                    <select class="w3-input w3-border w3-round" name="gender" id="idgender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </p>
               
                <p>
                    <i class="fa fa-envelope icon"></i>
                    <label>Email</label>
                    <input class="w3-input w3-border w3-round" name="email" id="idemail" type="email" required>
                </p>
                <p>
                    <i class="fa fa-phone icon"></i>
                    <label>Phone</label>
                    <input class="w3-input w3-border w3-round" name="phone" id="idphone" type="phone" required>
                </p>
               
                <p>
                    <i class="fas fa-house-user icon"></i>
                    <label>Address</label>
                    <textarea class="w3-input w3-border" id="idaddress" name="address" rows="4" cols="50" width="100%" placeholder="Please enter your address" required></textarea>
                </p>
                <div class="row">
                    <input class="w3-input w3-border w3-block w3-black w3-round" type="submit" name="submit" value="Submit">
                </div>

            </form>
        </div>
    </div>

    <footer class="w3-footer w3-black w3-center">
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>

    </footer>
    </body>
</html>