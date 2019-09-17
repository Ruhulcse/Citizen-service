<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/st.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <script type="text/javascript" src="js/script.js"></script>
  <?php
     if(isset($_GET['signup'])){
      if($_GET['signup']=='success')
     {
       echo '<p>Congratulations!!!</p>';
       echo '<p class="text">You have successfully signed up now login into mycity web applicaton</p>';
     }
   }
  ?>
  <div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form action="includes/login.inc.php" method="post">
    <script type="text/javascript" src="js/script.js"></script>
  <div class="hand"></div>
  <div class="hand rgt"></div>
   <?php
      if(isset($_GET['error'])){
        if($_GET['error']=='emptyfield'){
          echo" Empty field";
        }
       }
     ?>
     <?php
      if(isset($_GET['error'])){
        if($_GET['error']=='wrongpassword'){
          echo"Username or password is incorrect";
        }
       }
     ?>
  <h1>MyCity Login</h1>
  <div class="form-group">
    <input class="form-control" type="text" name="mailud" placeholder="username/email">
  </div>
  <div class="form-group">
     <input id="password" class="form-control" type="password" name="pwd" placeholder="password">
     <script type="text/javascript" src="js/script.js"></script>
    <button class="btn" type="submit" name="login-submit">Login </button>
    <p>Not yet a member?</p>
    <button class="b"><a href="signup.php">Sign up</button>
  </div>
</form>
</body>
</html>