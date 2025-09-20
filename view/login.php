  <?php
        session_start();
        if (isset($_SESSION["username"])) 
        {
            if(isset($_SESSION["Role"])==1)
            {
                header("location:../view/admin/a_dashboard.php");
            }
    
            elseif(isset($_SESSION["Role"])==2)
            {
                header("location:../view/instructor/i_dashboard.php");
            }
    
            else
            {header("location:../view/student/s_dashboard.php");
            }
    
        }
    
        else
        {
    
        }
    
    ?>
    
    
    
    
    
   





<!DOCTYPE html>
<html>
    <head>
        <script src="Script.js" defer></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container">
            <div class="left">
                <h1>E-Learnig Management System </h1>

            </div>
            <div class="right">
                <h2>Welcome</h2>
                <p>Let's Log In to Your Account</p>
                <form action="../controller/authController.php" method="POST">
                     <label for="username" >Username :</label>
                    <input type="text" id="username" name="username" placeholder="Username" ><br><br>
                    <span style="color:red;">
                        <?php if(isset($_GET["userNameErr"])) echo $_GET["userNameErr"]; ?>
                    </span>

                    <label for="password">password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>
                    <span name="passerr" style="color:red;"><?php if(isset($_GET["passErr"])){echo $_GET["passErr"]; } ?></span>

                    <?php
                        if (isset($_GET["invalidUser"])) {
                            echo '<p style="color:red;">' . $_GET["invalidUser"] . '</p>';
                        }
                    ?>

                    
                 
                     <div class="rememberme">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Remember Me</label>
                    </div>
                    <input type="submit" name="submit" value="Log in">
                    <p><a href="#">Forgot Password?</a></p>
                    <p><a href="#">Create Account</a></p>



                </form>

            </div>
        </div>
        </div>
    </body>
</html>