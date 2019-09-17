  <?php
    include'link.php';
?>
<!DOCTYPE html >
<html >
<head>
<title>The City News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style/new.css" />

</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <ul>
      <li class="f"><a href="news.php">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Page</a></li>
    </ul>
    <div class="break"></div>
    <div class="logo">
      <h1><a href="#">শহরের সমাচার </a></h1>
      <p>সবার আগে সবশেষ সংবাদ</p>
    </div>
    <div class="break"></div>
    <ol>
      <li><a href="cat.php?id=<?php echo 1; ?>">শিক্ষা </a></li>
      <li><a href="cat.php?id=<?php echo 2; ?>">রাজনীতি</a></li>
      <li><a href="cat.php?id=<?php echo 5; ?>">বিনোদন</a></li>
      <li><a href="cat.php?id=<?php echo 3; ?>">খেলাধুলা</a></li>
      <li><a href="cat.php?id=<?php echo 4; ?>">ধর্ম বিষয়ক</a></li>
    </ol>
    <div class="break"></div>
  </div>
  <!-- END header -->
  <!-- BEGIN content -->
  <div id="content">
   	<?php
         $per_page=4;
         if (isset($_GET["page"])) {
          $page=$_GET["page"];
         }else{
          $page=1; 
         }
         $start_from=($page-1)*$per_page;
    ?>
    <?php
      $catid=$_GET['id'];
      $query="SELECT *FROM news where cat='$catid' LIMIT $start_from,$per_page";
      $post=$db->select($query);
      if($post){
      	while($result=$post->fetch_assoc()){ ?>
      	    <!-- begin post -->
		    <div class="post">
		      <div class="thumb"><a href="#"><img src="admin/<?php echo $result['image'];?>"></a></div>
		      <h2><?php echo $result['title'];?></h2>
		      <p class="date"><?php echo $result['date'];?></p>
		       <?php echo $fm->short($result['body']); ?>
		      <a class="continue" href="ndetails.php?id=<?php echo $result['id'];?>">Continue Reading</a> 
		   </div>
		    <!-- end post -->
      <?php	} ?>
    <?php   }
      else{

      }
    ?>
   
    <!-- begin post navigation -->
     <div class="page">
       <?php

     $query= "SELECT *FROM news";
     $result=$db->select($query);
     $total_rows=mysqli_num_rows($result);
     $total_page=ceil($total_rows/$per_page);
     echo "<span class='paiging'><a href='news.php?page=1'>".'First page'."</a>";
     for ($i=1;$i<$total_page;$i++) {
      echo"<a href='news.php?page=".$i."'>".$i."</a>";
     }
    echo"<a href='news.php?page=$total_page'>".'Last page'."</a></span>"?>
     <!--paiging section-->
    </div>
  </div>
  <!-- END content -->
  <!-- BEGIN sidebar -->
  <div id="sidebar">
    <div class="wrapper">
      <!-- begin popular posts -->
      <h2>Categories</h2>
        <ul>
          <li><a href="cat.php?id=<?php echo 1; ?>">Education</a></li>
          <li><a href="cat.php?id=<?php echo 2; ?>">Politics</a></li>
          <li><a href="cat.php?id=<?php echo 3; ?>">sports</a></li>
          <li><a href="cat.php?id=<?php echo 5; ?>">entertainment</a></li>
          <li><a href="cat.php?id=<?php echo 4; ?>">Regious</a></li>
        </ul>
      <!-- end popular posts -->
      <!-- begin flickr photos -->
     </div>
    </div>
  </div>
  <!-- END sidebar -->
  <!-- BEGIN footer -->
  <div id="footer">
    <p>Copyright &copy; 2019 - <a href="#">Mycity webapplication</a> &middot; All Rights Reserved</p>
  </div>
  <!-- END footer -->
</div>
<!-- END wrapper -->
</body>
</html>
