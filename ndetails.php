<?php
    include'link.php';
?>
<!DOCTYPE html >
<html >
<head>
<title>The City News</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style/new.css" />
</head>
<body>
  <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
         $id=mysqli_real_escape_string($db->link,$_GET['id']);
         $comment =mysqli_real_escape_string($db->link, $_POST['comment']);
         $query="INSERT INTO newscomment(newsid,comment)VALUES('$id','$comment')";
        $inserted_rows = $db->insert($query);
   }
  ?>
<div class="details">
    <?php
       $id=mysqli_real_escape_string($db->link,$_GET['id']);
       $query="select *from news where id= '$id' ";
       $result=$db->select($query);
       if($result)
       {
         $post=$result->fetch_assoc();
         ?>
         <h1 style="
         margin-top: 5px;
         margin-bottom: 10px;
         font-family: cursive;
         font-size: 31px;"><?php echo $post['title'];?></h1>
         <?php $fm->date($post['date'])?>
         <img src="admin/<?php echo $post['image'];?>">
         <br>
         <hr>
         <h3 class="author" >by: <?php echo $post['author'];?></h3>
         <br>
         <section class="section"><?php echo $post['body']; ?></section>
         <hr>
         <br>
         <section class="comment">
           <form action="" method="post">
             Comment:
             <input class="box" type="text" name="comment">
             <input type="submit" name="submit" Value="Comment" />
           </form>
         </section>
         <section class="display">
              <?php
                 $query="SELECT *from newscomment where newsid='$id'";
                 $result=$db->select($query);
                 if($result)
                 {
                  while($comment=$result->fetch_assoc())
                  {
                    ?>
                    <div class="text">
                       <h1 class="user"><?php echo $_SESSION['username'];?> Says</h1><h2>"<?php echo $comment['comment']?>"</h2>
                    </div>
                   
                 <?php }
                 }
              ?>
         </section>
        
      <?php }
      else{
        echo "your requested page is not found";
      }

    ?>
</div>