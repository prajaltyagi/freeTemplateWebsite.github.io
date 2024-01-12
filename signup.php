<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body">
        <div class="main">
           <h1><span>Add </span> Account</h1><br>
           <p>If you have account than ?  <a href="login.php">let Started</a> || <a href="index.html">Home</a></p>
           <form action="#" method="POST" class="form">

<input type="text" name="name" placeholder="Enter your name" id="name"><br>

<input type="email" name="email" placeholder="Enter your email" id="email"><br>

<input type="tel" name="phone" placeholder="Enter your phone no." id="phone"><br>

<input type="text" name="template" placeholder="type of Template need?" id="template"><br>

<input type="submit" name="add" value="Add Account" id="add"><br>
           </form>
        </div>
    </div>
</body>
</html>

<?php
error_reporting(0);
if($_POST['add']){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $template=$_POST['template'];

    $query="INSERT INTO templatetable VALUES ('$name','$email','$phone','$template')";

    $data=mysqli_query($conn,$query);

    if($data){
        ?>

<script>
    alert("Insertion done succesfull !!");
</script>

<?php
header("location:slide1.html");
    }else{
        echo "insertion failed";
    }
}

?>