<?php
session_start();

include 'inculude/config.php';

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");

    if(mysqli_num_rows($query) > 0){
        $_SESSION['admin'] = $user;
      header("Location: index.php");
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adskydo Tech Dashboard</title>
    <link rel="stylesheet"  href="./assets/css/main.css">
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Sign In</h2>
                <p>Enter your credentials to access your account</p>
            </div>
            
            <form class="login-form"  method="post">
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="text"  name="username" required autocomplete="email">
                        <label for="email">Username</label>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password"  name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        
                    </div>
                  
                </div>


                <button type="submit" class="login-btn" name="login">
                    <span class="btn-text">Sign In</span>
                    <span class="btn-loader"></span>
                </button>
            </form>

         
        </div>
    </div>

</body>

</html>
