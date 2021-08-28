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
    <!-- <img src="bgnew.jpg" alt="Cool Image :)" id='bgimg'> -->
        <nav class="navbar">
            <ul>
                <li><button class="btn" ><a href="index.php"> Home </a></button></li>
                <li><button class="btn" ><a href="books.php">Books</a></button></li>
                <!-- <li><button class="btn" ><a href="dashboard.php">Dashboard</a></button></li> -->
                <li><button class="btn" id='logout'><a href="logout.php"> Logout </a></button></li>
                
            </ul>
         </nav>
         <table id="table">
            <thead>
                <tr>
                    <th>Books</th>
                   <th>Edit</th>
                   <!-- <th>View/th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                 <td>Book 1</td>
                 <td><button class="edit" id="b1e">Edit</button></td>
                 <!-- <td><button class="view" id="v1">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 2</td>
                 <td><button class="edit" id="b2e">Edit</button></td>
                 <!-- <td><button class="view" id="v2">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 3</td>
                 <td><button class="edit" id="b3e">Edit</button></td>
                 <!-- <td><button class="view" id="v3">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 4</td>
                 <td><button class="edit" id="b4e">Edit</button></td>
                 <!-- <td><button class="view" id="v4">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 5</td>
                 <td><button class="edit" id="b5e">Edit</button></td>
                 <!-- <td><button class="view" id="v5">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 6</td>
                 <td><button class="edit" id="b6e">Edit</button></td>
                 <!-- <td><button class="view" id="v6">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 7</td>
                 <td><button class="edit" id="b7e">Edit</button></td>
                 <!-- <td><button class="view" id="v7">View</button></td> -->
                </tr>
                <tr>
                 <td>Book 8</td>
                 <td><button class="edit" id="b8e">Edit</button></td>
                 <!-- <td><button class="view" id="v8">View</button></td> -->
                </tr>
                      <?php
    
                  
               
            ?> 
            </tbody>
        </table>
<!-- <script src="logic.js"></script> -->
<script>
    var editbtn=document.getElementsByClassName('edit');
    var viewbtn=document.getElementsByClassName('view');
for(let i=0;i<editbtn.length;i++)
{
    editbtn[i].addEventListener('click',()=>{
        location.replace("b"+(i+1)+".php");
        local
    })
    // viewbtn[i].addEventListener("click",()=>{
    //     location.replace("view.html");
    // })
}
</script>
</body>
</html>