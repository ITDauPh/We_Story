<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <script src="js/validate.js"></script>
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    
  </head>
  <body>
    <div class="center">
  
      <div class="container">
      <a href="login_form.php"><i class="fas fa-arrow-left fa-lg"></i></a> 
        <div class="text">Sign-up Form</div>
        
        <form action="service/account.php" method="post" onsubmit="return validate_signup()">
        <input type="hidden" name="account" id='account' value='signup'>
          <div class="data">
            <label for="">Email or Phone</label>
            <input type="text" name="user_name" id="user_name" required />
          </div>
          <div class="data">
            <label for="">Password</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="data">
            <label for="">Repeat Password</label>
            <input type="password" name="re-password" id="re-password" required />
          </div>
          <div class="btn">
            <div class="inner"></div>
            <button type="submit">Register now</button>
          </div>
          
        </form>
      </div>
    </div>
  </body>
</html>
