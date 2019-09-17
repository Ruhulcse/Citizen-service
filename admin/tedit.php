<?php
  $id=$_POST['id'];
  $location=$_POST['location'];
  $title=$_POST['title'];
  $body=$_POST['body'];
  $author=$_POST['author'];
  $conn=mysqli_connect('localhost','root','','city');
  $sql="UPDATE tourist SET location='$location',title='$title',body='$body',author='$author' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: all_tourist.php");
 }
 else
 {
 	echo "Update again please";
 }
 
?>