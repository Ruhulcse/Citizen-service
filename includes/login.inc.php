<?php
  if(isset($_POST['login-submit'])){
  	require('dbh.inc.php');

  	$username=$_POST['mailud'];
  	$password=$_POST['pwd'];
    
    if(empty($username)||empty($password)){
    	header("location:../login.php?error=emptyfield");
    	exit();
    }
    else{
    	$sql="SELECT *FROM user WHERE username=? OR email=?;";
    	$stmt=mysqli_stmt_init($conn);
    	if(!mysqli_stmt_prepare($stmt,$sql)){
    		header("Location:../login.php?error=sqlerror");
    	}
    	else{
    		mysqli_stmt_bind_param($stmt,"ss",$username,$username);
    		mysqli_stmt_execute($stmt);
    		$result=mysqli_stmt_get_result($stmt);
    		if($row=mysqli_fetch_assoc($result)){
    			$pwdcheck=password_verify($password,$row['password']);
    			if($pwdcheck==false){
    				header("Location:../login.php?error=wrongpassword");
    			}
    			else if($pwdcheck==true){
    				session_start();
    				$_SESSION['userid']=$row['id'];
    				$_SESSION['username']=$row['username'];
    				header("Location:../profile.php?login=success");
    				exit();
    			}
    			else{
    				header("Location:../login.php?error=wrongpassword");
    			}
    		}
    		else{
    			header("Location:../login.php?error=wrongpassword");
    		}
    	}
    }
  }
  else{
    
  	header("Location:../login.php");
  }

?>