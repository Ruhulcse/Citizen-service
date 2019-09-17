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
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
  $id=$_SESSION['userid'];
  $query="SELECT *FROM user WHERE id= '$id' ";
  $result=$db->select($query);
  $data=$result->fetch_assoc();
  ?>
    <aside class="profile-card">
  <header>
    <!-- here’s the avatar -->
    <a target="_blank" href="#">
      <img src="pic.jpg" class="hoverZoomLink">
    </a>

    <!-- the username -->
    <h1>
         <?php echo $data['username'];?>
     </h1>

    <!-- and role or location -->
    <h2>
       Blood group: <?php echo $data['blood'];?>
    </h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

    <h2><i class="fas fa-home"></i><?php echo $data['address'];?></h2>
    <br>
    <h2><i class="fas fa-envelope-square"></i><?php echo $data['email'];?></h2>
    <br>
    <h2><i class="fas fa-phone"></i><?php echo $data['phone'];?></h2>

   <a href="update.php" class="myButton">Update</a>
  </div>
</aside>
</body>
</html>

