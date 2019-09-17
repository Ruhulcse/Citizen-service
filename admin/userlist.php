<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
<link rel="stylesheet" type="text/css" href="../style/b.css">
    <div class="box round first grid">
        <h2>User List</h2>
        <div class="block">               
         <form action="userdelete.php" method="post">
            <table class="container">
              <thead>
                <tr>
                  <th><h1>Username</h1></th>
                  <th><h1>Email</h1></th>
                  <th><h1>Phone</h1></th>
                  <th><h1>Action</h1></th>
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
                   $query="SELECT *FROM user ";
                   $post=$db->select($query);
                   if($post){
                     while($result=$post->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $result['username'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['phone'];?></td>
                        <td><a href="userdelete.php?delete_id=<?php echo $result['id'];?>">Delete</a></td>
                      </tr>
                  <?php  } 
                   }
              ?>      
              </tbody>
            </table>
            </form>
        </div>
    </div>
</div>
 <?php include 'inc/footer.php';?>
