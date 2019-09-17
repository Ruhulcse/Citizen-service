<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php 
  $sql="SELECT *FROM news";
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
    <a class="button btn-info" href="anews.php">Back</a>
  </div>
  <br>
  <div class="right">    
    <h1 class="center">All News Post list</h1>
    <hr>
    <div>
      <table >
        <thead>
          <th class="sp">ID</th>
          <th class="sp">Title</th>
          <th class="sp">CatID</th>
          <th class="sp">Author</th>
          <th class="sp">Action</th>
        </thead>
        <tbody>
          <?php while($row=$result->fetch_assoc()){?>
              <tr>
                   <td class="center it"><?php echo $row['id'] ?></td>
                   <td class="center it"><?php echo $row['title'] ?></td>
                   <td class="center it"><?php echo $row['cat']?></td>
                   <td class="center it"><?php echo $row['author']?></td>

                   <td class="special">
                      <a class="button btn-warning" href="nupdate.php?id=<?php echo $row['id'];?>">update</a>
                      <a class="button btn-danger" onclick=" return confirm('are you sure')" href="ndelete.php?id=<?php echo $row['id'];?>">delete</a>  
                  </td> 
              </tr>
         <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
