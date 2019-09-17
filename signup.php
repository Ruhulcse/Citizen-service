
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
        <?php
               if(isset($_GET['error']))
               {
                if($_GET['error']=='emptyfileds'){
                  echo '<p style="color: red">Fill All The Field</p>';
                }
                else if($_GET['error']=='invalidmail'){
                  echo '<p style="color: red">Invalid Mail</p>';
                }
                else if($_GET['error']=='invaliduser'){
                  echo '<p style="color: red">Invalid user name</p>';
                }
                else if($_GET['error']=='usertaken'){
                  echo '<p style="color: red">This username already taken</p>';
                }
                else if($_GET['error']=='checkpassowrd'){
                  echo '<p style="color: red">Password does not match</p>';
                }
               }
            ?>
    <form action="includes/signup.inc.php" method="post">
    	<input type="text" name="uid" placeholder="Username" />
        <input type="text" name="mail" placeholder="E-mail" />
        <input type="password" name="pwd" placeholder="Password" />
        <input type="password" name="pwd-repeat" placeholder="Retype password" />
        <input type="submit" name="signup-submit" value="Sign me up" />
    </form>
  </div>
</div>
</body>
</html>

