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
           <h1><span>Lets's   </span> Start</h1><br>
           <p>If you don't have account than ?  <a href="signup.php"> Add     Account</a> || <a href="index.html">Home</a></p>
            <form action="#" method="POST" class="form">

<input type="text" name="name" placeholder="Enter your name" id="name"><br>

<input type="email" name="email" placeholder="Enter your email" id="email"><br>



<input type="submit" name="submit" value="let's Start" id="start"><br>
           </form>
        </div>
    </div>
</body>
</html>

<?php

include("connection.php");

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];

    $query="SELECT * FROM templatetable WHERE name='$name' && email='$email'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);

    if($total==1){
       
        ?>
        <script>
            alert("You login successfully !!");
        </script>

<?php
        header("location:slide1.html");
    }else{
        ?>
<script>
alert(" login failed!! create your account");
</script>

<?php
    }
}

?>

