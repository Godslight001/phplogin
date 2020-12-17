<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="successful.php" method="POST">
        <div id="login-box">
            <div class="left-box">
                <h1>SIGN UP</h1>
            
                <input type="text" name="fullname" placeholder="Fullname" required id="fullname">
                <input type="text" name="username" placeholder="Username" id="username" required>
                <input type="email" name="email" id="email" placeholder="Email Address">
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="password" id="repassword" placeholder="Confirm password" required>
                <input type="submit" name="signupbttn" value="SIGN UP">
            </div>
            
            <div class="right-box">
                <span class="signinwith">
                    Sign in with <br>
                    Social Network
                </span>
                <button class="social facebook">
                    Sign in with Facebook
                </button>
                <button class="social twitter">
                    Sign in with twitter
                </button>
                <button class="social google">
                    Sign in with Google
                </button>
                <button class="social email">
                    Sign in with Email
                </button>
            </div>
            <div class="or">
                OR
            </div>
        </div>
    </form>
    
</body>
</html>