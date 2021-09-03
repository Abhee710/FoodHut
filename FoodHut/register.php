<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="styler.css">
    </head>

    <body>
        <div class="register">
            <h1>Register</h1>
        </div>  
        <?php include('errors.php'); ?>

        <div id="main">
            <form>
                <div id="name">
                    <input class="fname" type="text" placeholder="First Name"  maxlength="15"><br>
                    <input class="lname" type="text" placeholder="Last Name " maxlength="15"><br>
                </div>
                    <input class="number" type="text" placeholder="Phone number" maxlength="10">
                    <input class="email" type="email" placeholder="E-mail id">
                    <input class="username" type="text" placeholder="Username">
                    <input class="password1" type="password" placeholder="password">
                    <input class="password2" type="password" placeholder="Confirm password">

                    <input type="button" class="button" value="Register" name="reg_user">
                    <a href="login.php">already a member?</a>
 
            </form>
        </div>
    








        <!-- <div class="register-box">
            <h1>Register</h1>

            <div class="textbox">
              
              <input class="fname" placeholder="First name" size="1">
              <input class="lname" placeholder="Last name">
              <input class="uname" placeholder="Username">
            </div> 
          
            <div class="textbox">
                <input class="email" placeholder="E-mail id">
            </div>
           <div class="textbox">
            <input type="text" placeholder="Password">
       
            </div>
         </div> -->
    
    </body>
    

</html>