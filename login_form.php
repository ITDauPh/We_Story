<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    
  </head>
  <body>
    <div class="center">
  
      <div class="container">
        <a href="index.php"><i class="fas fa-times fa-lg"></i></a>
      
        <div class="text">Login Form</div>
        
        <form action="service/account.php" method="post">
        <input type="hidden" name="account" id='account' value='login'>
          <div class="data">
            <label for="">Email or Phone</label>
            <input type="text" name="user_name" id="user_name" required />
          </div>
          <div class="data">
            <label for="">Password</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="forgot-pass">
            <a href="">Forgot Password?</a>
          </div>
          <div class="btn">
            <div class="inner"></div>
            <button type="submit">login</button>
          </div>
          <div class="signup-link">Not a member? <a href="signup_form.php">Sign up now</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
