<?php
include "registrationPages/config.php";

session_start();

error_reporting(0);

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql =  "SELECT * FROM users WHERE email_address = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if($result->num_rows > 0){
    $rows = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $row['email'];
    header("Location:/Cooking_with_Benefits/profile.php");

  } else{
    echo "<script>alert('E-mail or password incorrect')</script>";

  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/default.css">
    <link rel="stylesheet" href="./public/css/pages/index.css" />
    <title>Cooking With Benefits</title>
    <link rel="icon" type="image/png" href="./public/images/CWB logo.png" />
    <!-- <script src="/public/js/index.js"></script> -->
  <body>
    <!-- top nav bar -->
    <div class="bg">
      <header class="top-nav-bar">
        <a class="logo" href="index.html"><img src="./public/images/logo/logo-title.png" class="logo" /></a>
        <nav>
          <ul class="nav-links">
            <li><a href="#">Products</a></li>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Safety</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </nav>
        <button onclick="openForm()">LOG IN</button>
      </header>
    </div>
    <!-- Connect btn -->
    <div class="connect">
      <h1>Find your culinary friend!</h1>
      <button onclick="openForm()">Connect</button>
    </div>
    <!-- Login popup -->
    <div class="popup" id="myForm">
      <div class="close-btn" onclick="closeForm()">&times;</div>
      <form action="index.php"  method = "POST">
      <div class="login-form">
        <h4>Login</h4>
        <div class="form-element">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" name = "email" value = "<?php echo $email; ?>" required/>
        </div>
        <div class="form-element">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password" name="password" value = "<?php echo $_POST['password'];?>" required/>
          <a href="#" class="subtext" id="forgot-password"> Forgot password?</a>
        </div>
        <div class="form-element">
          <input type="checkbox" id="remember-me" />
          <label class="subtext" for="remember-me">Remember me</label>
        </div>
        <div class="form-element">
          <button class="login-btn" type ="submit" name = "submit">LOG IN</button>
        </div>
          <p class="subtext">Don't have an account?<a class="create-account subtext" href="./registrationPages/register-page1.php"> Create an account!</a></p>
        </div>
      </div>
  </form>
  </div>
</body>

</html>

<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>