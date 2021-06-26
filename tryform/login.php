<?php

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
        <h2>Login</h2>
        <div class="form-control">
          <label for="username" name="user_name">Username</label>
          <input type="text" name="user_name"  id="username" placeholder="Enter username" />
          <small>Error message</small>
        </div>
        
        <div class="form-control">
          <label for="password" name="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter password" />
          <small>Error message</small>
        </div>
        <button type="submit" value="Login">Login</button>

        <a href="signup.php">Don't have an account, SignUp from here</a>
      </form>
    </div>

    <script src="newjs.js"></script>
  </body>
</html>
