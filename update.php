  <?php
    include'link.php';
?>
<?php
session_start();
  if(isset($_SESSION['username'])){

  }
  else{
    header("Location:login.php");
  }
?>
<?php
  $id=$_SESSION['userid'];
  $query="SELECT *FROM user WHERE id= '$id' ";
  $result=$db->select($query);
?>
<!--Update Script -->
<link rel="stylesheet" type="text/css" href="style/form.css">
<div class="form-style-8">
  <h2>Update your information here</h2>
  <form action="update.php" method="post">
    <?php
           if($result)
           {
           	$data=$result->fetch_assoc();
           	?>
		     Name: <input type="text" name="username"  value="<?php echo $data['username']; ?>"> <br>
		     Blood: <input type="text" name="blood"  value="<?php echo $data['blood']; ?>"> <br>
		     Address: <input type="text" name="address"  value="<?php echo $data['address']; ?>"> <br>
		     Email: <input type="text" name="email"  value="<?php echo $data['email']; ?>"> <br>
		     Contact: <input type="text" name="phone"  value="<?php echo $data['phone']; ?>"> <br>
		     Want to donate blood?: <input type="text" name="donate"  value="<?php echo $data['donate']; ?>"> <br>

		     <input class="update" type="submit" value="update">

        <?php }

		?>
  </form>
</div>

   <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
   	$name=mysqli_real_escape_string($db->link, $_POST['username']);
   	$blood=mysqli_real_escape_string($db->link, $_POST['blood']);
   	$address=mysqli_real_escape_string($db->link, $_POST['address']);
   	$email=mysqli_real_escape_string($db->link, $_POST['email']);
   	$contact=mysqli_real_escape_string($db->link, $_POST['phone']);
   	$donate=mysqli_real_escape_string($db->link, $_POST['donate']);
   	$query="UPDATE user SET username='$name',email='$email',phone='$contact',address='$address',blood='$blood',donate='$donate' WHERE id='$id' ";
   	$result=$db->update($query);
   	if($result)
   	{
   		header("Location:profile.php");
   	}
   }
   else{
   	
   }
?>
