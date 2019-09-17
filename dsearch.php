,,  <?php
    include'link.php';
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="style/doctors.css">
 	<link href="style/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
<div class="section">
	<div class="sectionleft">
		<h1>Quality Care</h1>
		<hr class="line">
		<h2>your health is our prioriy</h2>
		<h2>City's doctors are always with you</h2>
	</div>
	 <div class="search">
	 	<h1>Find your doctor here</h1>
      <form class="form" action="dsearch.php" method="get">
      <input type="text" class="box"  name="search" placeholder="Search keyword..."/>
      <input type="submit" class="btn btn-success" name="submit" value="Search"/>
      </form>
     </div>
</div>
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
     <?php
      if(!isset($_GET['search'])||$_GET['search']==NULL){
        header("Location:404.php");
      }
      else{
      $db = new Database;
      $query = "select * from doctor where dept like '%".$_GET['search']."%' limit $start_from, $per_page";
      $post=$db->select($query);
      $fm = new Format;
    }
?>

 	<?php
       if($post){
         while($result=$post->fetch_assoc()){ ?>

			        <div class="side">
					  <div class="wrapper">
						<div class="card">
							<div class="front">
								<img class="logo" src="admin/<?php echo $result['image'];?>">
								<span class="name"><?php echo $result['name'];?></span>
								<span class="slogan"><?php echo $result['dept'];?></span>
							</div>
							<div class="back">
								<div class="container">
								</div>
								<div class="details">
									<span class="name1"><?php echo $result['name'];?></span>
									<span class="position"><?php echo $result['dept'];?></span>
									<span class="divider"></span>
									<span class="number">
									 Contact: <?php echo $result['phone'];?>
									</span>
									<span class="email">
										<?php echo $result['body'];?>
									</span>
									<span class="address">
									  <?php echo $result['hospital'];?>,
                    <?php echo $result['location'];?>
									</span>
								</div>
							</div>
						</div>
				    </div>
				 </div>

       <?php  }  ?>

   <?php }

     else{

     }
 	?>
</div>
<div class="page">
   <?php

 $query= "SELECT *FROM doctor";
 $result=$db->select($query);
 $total_rows=mysqli_num_rows($result);
 $total_page=ceil($total_rows/$per_page);
 echo "<span class='paiging'><a href='doctor.php?page=1'>".'First page'."</a>";
 for ($i=1;$i<$total_page;$i++) {
  echo"<a href='doctor.php?page=".$i."'>".$i."</a>";
 }
echo"<a href='doctor.php?page=$total_page'>".'Last page'."</a></span>"?>
 <!--paiging section-->

</div>
<div class="msg">
<section class="wrapper">
  <div id="navigation">
    <h1>Mission</h1> 
    <ul id="navlist">   
      <li>Ensure Health service</li>
      <li>Reduce time</li>
      <li>Reliable</li>
      <li>quickest time</li>
    </ul>
  </div>
  
  <div id="navigation">
    <h1>Vision</h1>
    <ul id="navlist">
      <li>Create a community</li>
      <li>Build A E-medical service</li>
      <li>Create a innovative orgranization</li>
      <li>Digitalization</li>
    </ul>
  </div>
  
<div id="navigation">
    <h1>Valuse</h1>
    <ul id="navlist">
      <li>Service to the community</li>
      <li>Promotion of positive change</li>
      <li>Safety first and foremost</li>
      <li>Secure information</li>
    </ul>
  </div>

</section>
</div>
</body>
</html>
