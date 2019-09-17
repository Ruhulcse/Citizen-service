<?php
  $id=$_POST['id'];
  $location=$_POST['location'];
  $name=$_POST['name'];
  $body=$_POST['body'];
  $dept=$_POST['dept'];
  $hospital=$_POST['hospital'];
  $phone=$_POST['phone'];
  $conn=mysqli_connect('localhost','root','','city');
  $sql="UPDATE doctor SET name='$name',dept='$dept',body='$body',hospital='$hospital',location='$location',phone='$phone' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: all_medical.php");
 }
 else
 {
 	echo "Update again please";
 }
 
?>