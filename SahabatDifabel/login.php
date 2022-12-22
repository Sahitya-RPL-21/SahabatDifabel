<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicss.css">

    <title>Login SahabatDifabel</title>
</head>
<body>
    <div class="top">
        <div class="top-bar">
            <a class="top-button" href="index.php">Home</a>
            <a class="top-button" href="login.php">Login</a>            
        </div>
    </div>
    <div class="middle">
        <form name = "loginForm" method="POST" action="./processes/loginProcess.php">
            <div class="container">
                <div class="top-container">
                    <h1 class="container-Title">Selamat Datang di SahabatDifabel</h1>
                </div>
                <div class="mid-container">
                    <div class="input-box">
                        <input type="text"     name="username" placeholder="Username" required/><br>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required/><br>
                    </div>
                </div>
                <div class="bottom-container">
                    <button class="login-button" type="submit">Login</button>
                    </br>
                </div>
                <a class="a-button to-logreg" href="register.php">Sign up</a> 
            </div>
        </form>
    </div>
    <div class="bottom">
        
    </div>
</body>
</html>