<!DOCTYPE html>
<html>
    <head>
        <script src="Script.js" defer></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container">
            <div class="left">
                <h1>E-Learnig </h1>

            </div>
            <div class="right">
                <h2>Welcome</h2>
                <p>Let's Log In to Your Account</p>
                <form name="login_form" id="login" action="" method="post" onsubmit=" return login_varification() ">
                    <label for="username" >Username :</label>
                    <input type="text" id="username" placeholder="Username" ><br><br>
                    <span id="usernameErr"></span>

                    <label for="password">password :</label>
                    <input type="password" id="password" placeholder="Enter password" required><br><br>
                    <span id="passErr"></span>
                 
                     <div class="rememberme">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Remember Me</label>
                    </div>
                    <input type="submit" value="Log in" id=" login">
                    <p><a href="#">Forgot Password?</a></p>
                    <p><a href="#">Create Account</a></p>



                </form>

            </div>
        </div>
        </div>
    </body>
</html>