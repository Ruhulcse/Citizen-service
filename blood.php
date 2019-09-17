  <?php
    include'link.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/b.css">
</head>
<body>
  <h1><span class="blue"></span>Blood<span class="blue"></span> <span class="yellow">Can save others life</pan></h1>
<h2>Donate blood <a href="blood.php" target="_blank">  Save life!</a></h2>

<div class="search">
    <h1>Find Your blood here</h1>
      <form class="form" action="bsearch.php" method="get">
      <input type="text" class="box"  name="search" placeholder="type blood group(A+,B+,AB+..)"/>
      <input type="submit" class="btn btn-success" name="submit" value="Search"/>
      </form>
</div>

<table class="container">
  <thead>
    <tr>
      <th><h1>Donar name</h1></th>
      <th><h1>Blood Group</h1></th>
      <th><h1>Address</h1></th>
      <th><h1>Contact</h1></th>
    </tr>
  </thead>
  <?php
         $per_page=8;
         if (isset($_GET["page"])) {
          $page=$_GET["page"];
         }else{
          $page=1; 
         }
         $start_from=($page-1)*$per_page;
    ?>
  <tbody>
  <?php 
     $query="SELECT *FROM user LIMIT $start_from,$per_page";
     $result=$db->select($query);
     if($result)
     {
      while($blood=$result->fetch_assoc())
      {
      ?>
        <?php
           if($blood['donate']=='YES' or $blood['donate']=='yes')
           {
            ?>
            <tr>
              <td><?php echo $blood['username'];?></td>
              <td><?php echo $blood['blood'];?></td>
              <td><?php echo $blood['address'];?></td>
              <td><?php echo $blood['phone'];?></td>
           </tr>
         <?php  }
        ?>
    <?php  }
    }
  ?>
  </tbody>
</table>
<div class="page">
   <?php

 $query= "SELECT *FROM user";
 $result=$db->select($query);
 $total_rows=mysqli_num_rows($result);
 $total_page=ceil($total_rows/$per_page);
 echo "<span class='paiging'><a href='blood.php?page=1'>".'First page'."</a>";
 for ($i=1;$i<$total_page;$i++) {
  echo"<a href='blood.php?page=".$i."'>".$i."</a>";
 }
echo"<a href='blood.php?page=$total_page'>".'Last page'."</a></span>"?>
 <!--paiging section-->

</div>
</body>
</html>






















