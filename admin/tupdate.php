<?php  include 'conn.php';?>
<?php include '../link.php';?>
<?php
 $id=$_GET['id'];
 $sql="SELECT *FROM tourist WHERE id=$id";
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

    <form action="tedit.php?id=<?php echo $id?>" method="POST">
          <div class="form-group">
            <label class="it" for="Name">ID:</label>
            <input required type="text" class="form-control" name="id" value="<?php echo $std['id'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="ID">Location:</label>
            <input type="text" class="form-control" name="location" value="<?php echo $std['location'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $std['title'];?>">
          </div>
          <div class="form-group1">
            <label class="it1" for="Birth">Body:</label>
             <textarea class="form-control1" name="body"><?php echo $std['body'];?></textarea>
          </div>
          <div class="form-group">
            <label class="it" for="Father">Author:</label>
            <input type="text" class="form-control" name="author" value="<?php echo $std['author'];?>">
          </div>
          <button type="submit" class="button btn-info">Update Me</button>
        </form>
  </div>
</body>
</html>

  