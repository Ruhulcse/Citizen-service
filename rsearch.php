<?php
 include'link.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="style/tour.css">
	  <link href="style/home.css" rel="stylesheet">
	<title>home rent service</title>
</head>
<body>
   <section id="main-section">
        <a href="city.php" style="font-size: 26px;
    color: #eae9ef;
    background: #4e5d68; text-decoration: none;
    ">City home</a>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="section-table">
              <div class="section-text">
                  <h2>Find your home by location</h2>
                  <form action="r.php" method="get">
                  <input type="text" name="search" placeholder="Search keyword..." style="color: red" />
                  <input type="submit" name="submit" value="Search"/>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
 <div class="contet">	
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
      if(!isset($_GET['search'])||$_GET['search']==NULL){
        header("Location:404.php");
      }
      else{
      $db = new Database;
      $query = "select * from rent where location like '%".$_GET['search']."%' limit $start_from, $per_page";
      $post=$db->select($query);
      $fm = new Format;
       }
      ?>

        <?php 
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
                    <label style="color: red">Type: <?php echo $result['type'];?></label>
                     <p style="color: #1000fd;">Location: <?php echo $result['location'];?></p>
                      <p style="color: #1000fd;">Price:<?php echo $result['price'];?></p>
                       <p style="color: #1000fd;">Bed number:<?php echo $result['bed'];?></p>
                        <p style="color: #1000fd;">Bathroom number: <?php echo $result['bath'];?></p>
                         <p style="color: #1000fd;">Area: <?php echo $result['area'];?></p>
                  
                        <a style="    text-decoration: none;
						    color: #ff0000fc;
						    text-align: center;
						    font-size: 21px;">Contact:<?php echo $result['phone'];?></a>
                   
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

 $query= "SELECT *FROM rent";
 $result=$db->select($query);
 $total_rows=mysqli_num_rows($result);
 $total_page=ceil($total_rows/$per_page);
 echo "<span class='paiging'><a href='rent.php?page=1'>".'First page'."</a>";
 for ($i=1;$i<$total_page;$i++) {
  echo"<a href='rent.php?page=".$i."'>".$i."</a>";
 }
echo"<a href='rent.php?page=$total_page'>".'Last page'."</a></span>"?>
 <!--paiging section-->

</div>
 </div>
</body>
</html>