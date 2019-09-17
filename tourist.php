<?php
    include'link.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>tourist place</title>
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
         $per_page=4;
         if (isset($_GET["page"])) {
          $page=$_GET["page"];
         }else{
          $page=1; 
         }
         $start_from=($page-1)*$per_page;
        ?>
        <!--paging-->
        <?php 
         $query="SELECT *FROM tourist LIMIT $start_from,$per_page";
         $post=$db->select($query);
         if($post) {
          $side=1;
           while ($result=$post->fetch_assoc()) { ?>

                <div class="showcase">
                <div class="travel-card">
                  <div class="image">
                    <img src="admin/<?php echo $result['image'];?>"
                  >
                  </div>
                  <div class="content">
                    <label class="category"><?php echo $result['location'];?></label>
                    <h1 class="topic"><?php echo $result['title'];?></h1>
                    <?php echo $fm->short($result['body']); ?>
                     <div class="myButton">
                        <a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
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

 <section id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title">Before you leave</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 my-2">
          <div class="section-text">
            <h4>Keep Enjoying!!</h4>
            <p>This city is full of amazing place
              you will enjoy more and more so try
              to visit more place and exprole the 
              city. we always with you as a tourist
              guide
            </p>
          </div>
        </div>

        <div class="col-md-4 my-2">
          <div class="section-text">
            <h4>Be Safe !</h4>
            <p>For Traveling anywhere keep neccessary
              things with you. keep some primary medicine
              and if possible keep first aid box with you. 
              don't race with other car and vehicle. 
            </p>
          </div>
        </div>

        <div class="col-md-4 my-2">
          <div class="section-text">
            <h4>transportation</h4>
            <p>There are some things you should take
              care of before going to your next
              adventure. We’ll help you to get
              required Transportaion.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</html>