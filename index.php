<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2 class="login-title">Login Page</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
        <a href="register.php">Register</a>
    </div>
    <img class="gif-image" src="https://media.giphy.com/media/3o6MbdTboTFWOUsLkc/giphy.gif" alt="Login GIF">
</body>
</html>
