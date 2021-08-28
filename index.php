<?php
session_start();
if(!isset($_SESSION['username']))
{
    ?><script>alert("You are Logged Out!");</script>
    <?php
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <!-- <video src="bgvideo.mp4" autoplay muted loop id="bgvideo"></video> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body id="body">
        <nav class="navbar">
            <ul>
                <li><button class="btn" ><a href="index.php"> Home </a></button></li>
                <li><button class="btn" ><a href="books.php">Books</a></button></li>
                <!-- <li><button class="btn" ><a href="dashboard.php">Dashboard</a></button></li> -->
                <li><button class="btn" id='logout'><a href="logout.php"> Logout </a></button></li>
                
            </ul>
         </nav>
         <div class="homemsg">
             Welcome To The SemBook <?php echo strtoupper($_SESSION['username']);?>
         </div>
<!-- <script src="logic.js"></script> -->
<script>
</script>
</body>
</html>