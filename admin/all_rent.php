<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php 
  $sql="SELECT *FROM rent";
  $result=$db->select($sql);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>new page</title>
  <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body class="wc">
   <div class="left">
    <br>
    <a class="button btn-info" href="arent.php">Back</a>
  </div>
  <br>
  <div class="right">    
    <h1 class="center">All Rent Post list</h1>
    <hr>
    <div>
      <table >
        <thead>
          <th class="sp">Type</th>
          <th class="sp">Phone</th>
          <th class="sp">Location</th>
          <th class="sp">Price</th>
          <th class="sp">Action</th>
        </thead>
        <tbody>
          <?php while($row=$result->fetch_assoc()){?>
              <tr>
                   <td class="center it"><?php echo $row['type'] ?></td>
                   <td class="center it"><?php echo $row['phone'] ?></td>
                   <td class="center it"><?php echo $row['location']?></td>
                   <td class="center it"><?php echo $row['price']?></td>

                   <td class="special">
                      <a class="button btn-warning" href="rupdate.php?id=<?php echo $row['id'];?>">update</a>
                      <a class="button btn-danger" onclick=" return confirm('are you sure')" href="rdelete.php?id=<?php echo $row['id'];?>">delete</a>  
                  </td> 
              </tr>
         <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
