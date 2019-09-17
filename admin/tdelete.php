<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','city');
$sql="DELETE FROM tourist WHERE id=$id";
if(mysqli_query($conn,$sql))
{
 
	header("Location: all_tourist.php");
}
else
{
	echo "Deletion is not posssible ";
}
?>