<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php
 $id=$_GET['id'];
 $sql="SELECT *FROM doctor WHERE id=$id";
 $result=$db->select($sql);
 $std=$result->fetch_assoc()
?>

<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<link rel="stylesheet" type="text/css" href="st.css">
</head>
<body style="background-color:#9fad6a;">
  <div class="left">
  	<br>
  	<a class="button btn-info" href="all_tourist.php">View All post</a>
  </div>

  <div class="right">
    
    <h2 class="center">Update Doctor Information</h2>

    <form action="medit.php?id=<?php echo $id?>" method="POST">
          <div class="form-group">
            <label class="it" for="Name">ID:</label>
            <input required type="text" class="form-control" name="id" value="<?php echo $std['id'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Name">Name:</label>
            <input required type="text" class="form-control" name="name" value="<?php echo $std['name'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="ID">Dept:</label>
            <input type="text" class="form-control" name="dept" value="<?php echo $std['dept'];?>">
          </div>
          <div class="form-group1">
            <label class="it1" for="Birth">Body:</label>
             <textarea class="form-control1" name="body"><?php echo $std['body'];?></textarea>
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Hospital:</label>
            <input type="text" class="form-control" name="hospital" value="<?php echo $std['hospital'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Location:</label>
            <input type="text" class="form-control" name="location" value="<?php echo $std['location'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Phone:</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $std['phone'];?>">
          </div>
          <button type="submit" class="button btn-info">Update Me</button>
        </form>
  </div>
</body>
</html>