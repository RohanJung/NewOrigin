<?php

session_start();


include("connection.php");
include("function.php");







 $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contaienr">


        <header>
               <h1>HyperOrigin</h1>
                <nav>
                    <ul class="nav_links">

                    Helllo, <?php echo $user_data['email']; ?>
                  
                  <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <a href="#" class="cta"><button>Contact</button></a>


        </header>

        <section>
            <div class="container">

                <h1>HyperOrigin</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipenderit accusantium recusandae, fugit ratione.</p>


                
            </div>


        </section>

        




</body>
</html>
