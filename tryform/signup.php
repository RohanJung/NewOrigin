<?php
 session_start();


      include("connection.php");
      include("function.php");

      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
          //posted
         $user_name = $_POST['user_name'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         


         if(!empty($user_name) && !empty($email)  && !empty($password) && !is_numeric($user_name) )
         {
             $user_id = random_num(100);


             
             $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password' )";
             

             mysqli_query($con, $query);
             
             header("Location: login.php");
             die;

         }else
         {
             echo "Please enter some valid information";
         }

      }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="login.css" />
    <title>Form Validator</title>
  </head>
  <body>
    <div class="container">
      <form method="post" id="form" class="form">
        <h2>Register With Us</h2>
        <div class="form-control">
          <label for="username" name="user_name">Username</label>
          <input type="text" name="user_name"  id="username" placeholder="Enter username" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="email" name="email">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter email" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password" name="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter password" />
          <small>Error message</small>
        </div>
        
        <button type="submit">SignUp</button>

      <a href="login.php">Already have an account, Login from here</a>
      </form>
    </div>

    <script src="newjs.js"></script>
  </body>
</html>
