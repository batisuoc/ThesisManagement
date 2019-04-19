
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="Email address"/>
        <button>Request New Password</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <form class="login-form" action="process.php" method="POST">

        <input type="text" placeholder="Username" name ="username"/>
        <input type="password" placeholder="Password" name="password"/>
        <button>login</button>
        <p class="message">Forgot Password? <a href="#">Click here to get new password</a></p>
        <!-- <p>Yolo</p> -->

      </form>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
