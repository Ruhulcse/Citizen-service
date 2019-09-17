<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php
 $id=$_GET['id'];
 $sql="SELECT *FROM rent WHERE id=$id";
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
    
    <h2 class="center">Update Tourism Information</h2>

    <form action="redit.php?id=<?php echo $id?>" method="POST">
          <div class="form-group">
            <label class="it" for="Name">ID:</label>
            <input required type="text" class="form-control" name="id" value="<?php echo $std['id'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Name">Type:</label>
            <input required type="text" class="form-control" name="type" value="<?php echo $std['type'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="ID">Phone:</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $std['phone'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Location:</label>
            <input type="text" class="form-control" name="location" value="<?php echo $std['location'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Price:</label>
            <input type="text" class="form-control" name="price" value="<?php echo $std['price'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Bed:</label>
            <input type="text" class="form-control" name="bed" value="<?php echo $std['bed'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Bath:</label>
            <input type="text" class="form-control" name="bath" value="<?php echo $std['bath'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Father">Area:</label>
            <input type="text" class="form-control" name="area" value="<?php echo $std['area'];?>">
          </div>
          <button type="submit" class="button btn-info">Update Me</button>
        </form>
  </div>
</body>
</html>