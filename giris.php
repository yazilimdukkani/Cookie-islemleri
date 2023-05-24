<?php 
session_start();
ob_start();

if (!empty($_COOKIE["uye"]) == "online") {
    
    header("Location: index.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


<style>

.loginKapsayici{

margin-top:300px;
background-color:rgb(5, 205, 227);

border-radius: 10px;

box-shadow: 10px 5px 10px 10px #888888;

}

body{

background-color: rgb(247, 194, 247);

}

h4{

    font-family: cursive;

}
label{

    font-family: serif;

}

</style>

</head>
<body>
    
<div class="col-md-3 offset-md-4 loginKapsayici">

<h4 class="text-center">Login Form </h4>

<form action="" method="post">
    
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Username</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="user" name="user">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password">
    </div>
    
    <button class="btn btn-success col-12" type="submit">Login</button>
    
    </form> 
</div>



<?php 
include("class.php");

$cook= new Cookie();

if (!empty($_POST['user']) && !empty($_POST['password'])) {
 
    $cook->sorgu($_POST['password'],$_POST['user']);
    $value="online";
   

$uye =@$_COOKIE["uye"];


    setcookie("uye", $value, time()+60);
header("Location: index.php");





}






?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>