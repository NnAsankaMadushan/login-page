<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Add your login logic here
    // For example, you can check the credentials against a database

    // For demonstration purposes, let's just print the submitted data
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Log in Form</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="container">
        <div class="main-box">
            <h1>Log In</h1>
            <form action="login.php" method="post">
                <div class="input-box">
                    <span class="icon"><i data-feather="mail"></i></span>
                    <input type="email" name="email" required/>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i data-feather="lock"></i></span>
                    <input type="password" name="password" required/>
                    <label>Password</label>
                </div>
                <div class="check">
                    <label><input type="checkbox"/>Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register">
                    <p>Don't have an account?<a href="/signup.html" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
