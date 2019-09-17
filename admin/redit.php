<?php
  $id=$_POST['id'];
  $type=$_POST['type'];
  $phone=$_POST['phone'];
  $location=$_POST['location'];
  $price=$_POST['price'];
  $bed=$_POST['bed'];
  $bath=$_POST['bath'];
  $area=$_POST['area'];
  $conn=mysqli_connect('localhost','root','','city');
  $sql="UPDATE rent SET type='$type',phone='$phone',location='$location',price='$price',bed='$bed',bath='$bath',area='$area' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: all_rent.php");
 }
 else
 {
 	echo "Update again please";
 }
 
?>