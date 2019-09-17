<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add House Rent information</h2>
                 <h2><a href="all_rent.php">View all post</a></h2>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $type        =mysqli_real_escape_string($db->link, $_POST['type']);
    $phone   =mysqli_real_escape_string($db->link, $_POST['phone']);
    $price       =mysqli_real_escape_string($db->link, $_POST['price']);
    $bed         =mysqli_real_escape_string($db->link, $_POST['bed']);
    $location    =mysqli_real_escape_string($db->link, $_POST['location']);
    $bath        =mysqli_real_escape_string($db->link, $_POST['bath']);
    $area        =mysqli_real_escape_string($db->link, $_POST['area']);

    $permited    = array('jpg', 'jpeg', 'png', 'gif');
    $file_name   = $_FILES['image']['name'];
    $file_size   = $_FILES['image']['size'];
    $file_temp   = $_FILES['image']['tmp_name'];

    $div         = explode('.', $file_name);
    $file_ext    = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;

    if( $type == "" || $phone == "" || $price== "" || $bed== "" || $location== "" || $bath == "" || $area == "" || $file_name == "")
    {
        echo "<span class='error'>Field Must not be empty</span>";
    }
    elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    }  
    elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-"
     .implode(', ', $permited)."</span>";
    } 

    else{
    move_uploaded_file($file_temp, $uploaded_image);
    $query = "INSERT INTO rent(type,phone, image,location,price,bed,bath,area) VALUES('$type', '$phone','$uploaded_image','$location', '$price', '$bed','$bath', '$area')";
    $inserted_rows = $db->insert($query);
    if ($inserted_rows) {
     echo "<span class='success'>Data Inserted Successfully.
     </span>";
    }else {
     echo "<span class='error'>Data Not Inserted !</span>";
     }
    }
}
?>
                <div class="block">               
                 <form action="arent.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       <tr>
                            <td>
                                <label>Type: </label>
                            </td>
                            <td>
                                <input type="text" name="type" placeholder="Sell or Rent" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Home name</label>
                            </td>
                            <td>
                                <input type="text" name="phone" placeholder="Enther contact number" class="medium" />
                            </td>
                        </tr>

                          <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Location: </label>
                            </td>
                            <td>
                                <input type="text" name="location" placeholder="Enter location" class="medium" />
                            </td>
                        </tr>
						<tr>
                        <tr>
                            <td>
                                <label>Price: </label>
                            </td>
                            <td>
                                <input type="text" name="price" placeholder="Enter the price " class="medium" />
                            </td>
                         </tr>
                         <tr>
                            <td>
                                <label>Bed</label>
                            </td>
                            <td>
                                <input type="text" name="bed" placeholder="Enter Bed number" class="medium" />
                            </td>
                         </tr>
                         <tr>
                            <td>
                                <label>Bathroom</label>
                            </td>
                            <td>
                                <input type="text" name="bath" placeholder="Enter Bathroom number" class="medium" />
                            </td>
                         </tr>
                          <tr>
                            <td>
                                <label>Area</label>
                            </td>
                            <td>
                                <input type="text" name="area" placeholder="Enter the area" class="medium" />
                            </td>
                         </tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
 <?php include 'inc/footer.php';?>