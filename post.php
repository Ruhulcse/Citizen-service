
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/more.css">
</head>
<body>
 <?php
    include'link.php';
?>

<?php
$postid=mysqli_real_escape_string($db->link,$_GET['id']);

      
 $query="select *from tourist where id= '$postid' ";
 $result=$db->select($query);
 if($result)
 {
  $post=$result->fetch_assoc();
  
   ?>

      <div class="data">
            <div class="image">
              <img src="admin/<?php echo $post['image'];?>"
            >
            </div>
             <h1 class="category"><?php echo $post['title'];?></h1>
            <div class="topic"><?php echo $post['location'];?></div>
            <h1 class="author">Posted By: <?php echo $post['author'];?></h1>
            <section class="post"><?php echo $post['body']; ?> </section>
             
   </div>

   <?php 
 }
 else{
   
}

?>
</body>
</html>



