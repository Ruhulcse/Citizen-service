<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php 
  $sql="SELECT *FROM doctor";
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
    <a class="button btn-info" href="amedical.php">Back</a>
  </div>
  <br>
  <div class="right">    
    <h1 class="center">All Doctor list</h1>
    <hr>
    <div>
      <table >
        <thead>
          <th class="sp">Name</th>
          <th class="sp">Dept</th>
          <th class="sp">Location</th>
          <th class="sp">Hospital</th>
          <th class="sp">Action</th>
        </thead>
        <tbody>
          <?php while($row=$result->fetch_assoc()){?>
              <tr>
                   <td class="center it"><?php echo $row['name'] ?></td>
                   <td class="center it"><?php echo $row['dept'] ?></td>
                   <td class="center it"><?php echo $row['location']?></td>
                   <td class="center it"><?php echo $row['hospital']?></td>

                   <td class="special">
                      <a class="button btn-warning" href="mupdate.php?id=<?php echo $row['id'];?>">update</a>
                      <a class="button btn-danger" onclick=" return confirm('are you sure')" href="mdelete.php?id=<?php echo $row['id'];?>">delete</a>  
                  </td> 
              </tr>
         <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
