<?php
    include'link.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>tourist place</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/tour.css">
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <link href="style/style.css" rel="stylesheet">
</head>

<body>

  <!-- Main Section -->
   <section id="main-section">
    <a href="tourist.php">City Tour</a>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="section-table">
              <div class="section-text">
                  <h2>Where will you go next?</h2>
                  <form action="search.php" method="get">
                    <input type="text" name="search" placeholder="Search keyword..."/>
                    <input type="submit" name="submit" value="Search"/>
                  </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

<div class="main">

  <?php
      $per_page = 3;
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }else{
        $page = 1;
      }
      $start_from = ($page-1)*$per_page;

    ?>

  <?php
      if(!isset($_GET['search'])||$_GET['search']==NULL){
        header("Location:404.php");
      }
      else{
      $db = new Database;
      $query = "select * from tourist where title like '%".$_GET['search']."%' limit $start_from, $per_page";
      $result=$db->select($query);
      $fm = new Format;
    }
?>
        <?php 
         
         if($result) {
          $side=1;
           while ($post=$result->fetch_assoc()) { ?>

                <div class="showcase">
                <div class="travel-card">
                  <div class="image">
                    <img src="admin/<?php echo $post['image'];?>"
                  >
                  </div>
                  <div class="content">
                    <label class="category"><?php echo $post['location'];?></label>
                    <h1 class="topic"><?php echo $post['title'];?></h1>
                    <?php echo $fm->short($post['body']); ?>
                     <div class="myButton">
                        <a href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
                     </div>
                   </div>
                 </div>
               </div>
 <?php } ?> <!--while loop end-->
   <!--paiging section-->
   <br>
   <?php }

    else{
    header("Location:404.php");
   } ?><!--if else end-->

</div>

<div class="page">
   <?php

 $query= "SELECT *FROM tourist";
 $result=$db->select($query);
 $total_rows=mysqli_num_rows($result);
 $total_page=ceil($total_rows/$per_page);
 echo "<span class='paiging'><a href='tourist.php?page=1'>".'First page'."</a>";
 for ($i=1;$i<$total_page;$i++) {
  echo"<a href='tourist.php?page=".$i."'>".$i."</a>";
 }
echo"<a href='tourist.php?page=$total_page'>".'Last page'."</a></span>"?>
 <!--paiging section-->

</div>

</body>
</html>