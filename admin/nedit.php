<?php
  $id=$_POST['id'];
  $title=$_POST['title'];
  $cat=$_POST['cat'];
  $body=$_POST['body'];
  $author=$_POST['author'];
  $conn=mysqli_connect('localhost','root','','city');
  $conn->set_charset("utf8mb4");
  $sql="UPDATE news SET title='$title',cat='$cat',body='$body',author='$author' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: all_news.php");
 }
 else
 {
 	echo "Update again please";
 }
 
?>