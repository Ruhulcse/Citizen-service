<?php
  include 'conn.php';
  if(isset($_GET['delete_id'])){
    $id=(int)$_GET['delete_id'];
    $sql="DELETE FROM user WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("Location: userlist.php");
     } 
   else {
    echo "Error deleting record: " . $conn->error;
    }
}
?>