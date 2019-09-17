	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		  header("Location:../signup.php?error=invalidmailuid=");
          exit();
	}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          header("Location:../signup.php?error=invalidmail&uid=".$username);
          exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
          header("Location:../signup.php?error=invalidmail&mail=".$email);
          exit();
	}