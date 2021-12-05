<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script> alert ('Session not available. Please login');</script>";
    echo "<script> window.location.replace('../login.php')</script";
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

    <title>Main Page</title>
    </head>

    <body>
    <div class="w3-header w3-container w3-black w3-padding-16 w3-center">
            <div class="image-container">
                <div class="text">Kedai Roti Canai Pak Jabar <br> (Gerai No.7)
                </div>
            </div>
    </div>

    <div class="navbar">
        <div id="idnavbar">
            <a href="newcustomer.php"><i class="fa fa-fw fa-user-plus"></i> New Customer</a> 
            <a href="../login.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a> 
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <footer class="w3-footer w3-black w3-center">
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>

    </footer>
    </body>
</html>