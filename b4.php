<?php
include 'config.php';
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
    <title>Book 4</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<!-- Quilljs Editor CDN -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
</head>
<body>
   
<div id="toolbar"></div>
    <form method="post" action="" class="textEditor">
    <?php 
    $usrname=$_SESSION['username'];
$usrmail=$_SESSION['usermail'];
$selectqry = "select * from books where email='$usrmail'";
$ExecSelectQry= mysqli_query($con, $selectqry);
$res=mysqli_fetch_array($ExecSelectQry);
$data=$res['4'];
?>
<div id="qe"><?php echo $data;?></div>
<input type="hidden" id="qhtml" name="data"></input>
<input type="submit" name="submit" value="submit" class="edit">
    </form>
    <script>
     var toolbarOptions=[['bold','underline','italic','strike'],
    ['blockquote'],[{'header':[1,2,3,4,5,6]}],
[{'list':'ordered'},{'list':'bullet'}],
[{'script':'sub'},{'script':'super'}],
[{'indent':'-1'},{'indent':'+1'}],
[{'direction':'rt1'}],
[{'size':['small',false,'large','huge']}], [{ 'color': [] }, { 'background': [] }],          
  [{ 'font': [] }],
  [{ 'align': [] }],

    ];
        var quill = new Quill('#qe', {
         modules:{toolbar:toolbarOptions},
            theme: 'snow'
        });

        
  
   quill.on('text-change', function(delta, oldDelta, source) {
        document.getElementById("qhtml").value = quill.root.innerHTML;
    });

      </script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $content=$_POST['data'];
    $sql="UPDATE `books` SET `book4`='$content' where `email`='$usrmail'";
    $fire = mysqli_query($con, $sql);
    header('location: books.php');
}
    ?>