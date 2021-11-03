<?php
include "config.php";

if(isset($_POST['submit-info'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST["lastName"];
    $email_address = $_POST['email'];
    $password = md5($_POST['password']);
    $cPassword = md5($_POST['confirm-password']);
    $gender = $_POST['gender'];
    $birth_date = date('Y-m-d', strtotime($_POST['birth_date']));
    if($password == $cPassword){
        $sql = "INSERT INTO users (firstName, lastName, email_address, password, gender, birth_date)
        VALUES ('$firstName', '$lastName', '$email_address', '$password', '$gender', '$birth_date')";

        $result =mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Registration Complete!')</script>";
            header("Location:register-page2.php");

        }else{
            echo "<script>alert('Something went wrong!')</script>";

        }
    } else{
        echo"<script>alert('Password incorrect!')</script>";
    }

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/pages/registration.css">
    <link rel="stylesheet" href="../public/css/default.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- js and css -->
    <link rel="stylesheet" href="../public/css/pages/registration.css">
    <script type="module" src="../public/js/main.js"></script>
    <title>Register</title>
    <link rel="icon" type="image/png" href="Cooking_with_Benefits/public/images/CWB logo.png" />
    <base href="/">
</head>

<body>
    <!-- top navigation bar -->
    <header class="top-nav-bar">
        <a class="logo" href="index.html"><img src="Cooking_with_Benefits/public/images/logo/logo-title.png" class="logo" /></a>
    </header>

    <form action="/Cooking_with_Benefits/registrationPages/register-page1.php" method="post" id="registration-form">
        <div class="form-header">
            <h1 class="header-bar">Register</h1>
            <div class="form-info">
                <!-- firstname -->
                <div class="name-container" id="block">
                    <label for="firstName"><b>Name:&emsp;</b></label>
                    <input type="text" name="firstName" size="30" placeholder="First Name" required></input>
                    <input type="text" name="lastName" size="30" placeholder="Last Name" required></input>
                    <br><br><br>
                </div>

                <!-- email -->
                <div class=" email-container" id="block">
                    <label for="email"><b>E-mail:&emsp;</b></label>
                    <input type="email" name="email" style="width:576px;" placeholder=" E-mail" required></input>
                    <br><br><br>
                </div>
                <!-- password -->
                <div class="password-container" id="block">
                    <label for="password"><b>Password:&emsp;</b></label>
                    <input type="password" name="password" id="password" size="30" placeholder="Password" minlength="6"
                        maxlength="16" required></input>
                    <input type="password" name="confirm-password" id="confirm_password" size="30" minlength="6"
                        maxlength="16" placeholder="Confirm password" required></input>
                    <i class="fa fa-check-circle-o"
                        style="font-size:30px;color: gray; position: relative; left: 2px;bottom: -10px;" id="check_logo"
                        aria-hidden=" true"></i>
                    <br><br><br>
                </div>

                <!-- birthday -->
                <div class="birthday-container" id="block">
                    <label for="birthday"><b>Birthday:&emsp;</b></label>
                    <input type="date" name="birth_date" style="width:576px; color: gray;" required></input>
                    <br><br><br>
                </div>
                <!-- gender -->
                <div class="gender-container" id="block">
                    <label for="button"><b>Gender:&emsp;</b></label>
                    <input type="radio" class="gender-radio" id="rd_male" name="gender" value="male">
                    <label for="rd_male" id="gender-label">Male</label>
                    <input type="radio" class="gender-radio" id="rd_female" name="gender" value="female">
                    <label for="rd_female" id="gender-label">Female</label>
                    <input type="radio" class="gender-radio" id="rd_other" name="gender" value="other">
                    <label for="rd_other" id="gender-label">Other</label>
                </div>
                <br><br><br>
                <!-- profile picture -->
                <div class="form-profile">
                    <img id="profile-img" src="Cooking_with_Benefits/public/images/default_img.png">
                    <input id="img-upload" type="file" name="profile_photo" placeholder="Photo" />
                    <label for="img-upload" id="upload_btn">Choose profile</label>
                </div>
            </div>

            <a href = "Cooking_with_Benefits/registrationPages/register-page2.php"><input type="submit" class="submit-button" name ="submit-info" value="Continue" form="registration-form"></a>

    </form>
</body>

</html>
