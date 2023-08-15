<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to my application deployed using Kubernetes</h2>
        <p>Hello, <?php echo $_SESSION['username']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
    <img class="gif-image" src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdHBxc2o1b3NiaWN0ZzU3cmF6bzN2anc0YTBjbmFqbzc4MDB4MmUwZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/LY8yDak6Tngb6FfPrt/giphy.gif" alt="Login GIF">
</body>
</html>