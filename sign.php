<?php
$succes=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
       include 'connect.php';
       $username=$_POST['username'];
       $password=$_POST['password'];
       
    $sql="insert into `registration` (username,password)
       values('$username','$password')";
       $result=mysqli_query($con,$sql);
        
     if($result){
       echo"data inserted successfully";
       }else{
       die(mysqli_error($con));
       }   
}

?>




<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-center">signup page</h1>
  <div class="container mt-5">
  <form action="sign.php" method="post">
     <div class="form-group">
   <label for="user name">NAME:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter your name" name=" username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
      <button type="submit" class="btn btn-primary mt-2 w-100">Submit</button>
       </form>
  </body>
</html>