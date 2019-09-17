<?php
  $id=$_POST['id'];
  $location=$_POST['location'];
  $title=$_POST['tile'];
  $body=$_POST['body'];
  $author=$_POST['author'];

  $permited  = array('jpg', 'jpeg', 'png', 'gif');
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_temp = $_FILES['image']['tmp_name'];

  $div = explode('.', $file_name);
  $file_ext = strtolower(end($div));
  $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
  $uploaded_image = "upload/".$unique_image;

  move_uploaded_file($file_temp, $uploaded_image);
  $conn=mysqli_connect('localhost','root','','city');
  $sql="UPDATE tourist SET $location='$location',title='$title', image='$uploaded_image',body='$body',author='$author' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: alltourist.php?id=".$id);
 }
 else
 {
 	echo "Update again please";
 }
 
?>