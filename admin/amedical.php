<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Doctors information of your city </h2>
                <h2><a href="all_medical.php">View all post</a></h2>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =mysqli_real_escape_string($db->link, $_POST['name']);
    $dept   =mysqli_real_escape_string($db->link, $_POST['dept']);
    $body  =mysqli_real_escape_string($db->link, $_POST['body']);
    $hospital=mysqli_real_escape_string($db->link, $_POST['hospital']);
    $location=mysqli_real_escape_string($db->link, $_POST['location']);
    $phone=mysqli_real_escape_string($db->link, $_POST['phone']);

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;

    if( $name == "" || $dept == "" || $body== "" || $hospital== "" || $location== "" || $phone == "" || $file_name == "")
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
    $query = "INSERT INTO doctor(name,dept, image,body, hospital, location, phone) VALUES('$name', '$dept','$uploaded_image','$body', '$hospital', '$location', '$phone')";
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
                 <form action="amedical.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       <tr>
                            <td>
                                <label>Name: </label>
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Enter the doctor name" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Speciality</label>
                            </td>
                            <td>
                                <input type="text" name="dept" placeholder="Speciality.." class="medium" />
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
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
						<tr>
                        <tr>
                            <td>
                                <label>hospital</label>
                            </td>
                            <td>
                                <input type="text" name="hospital" placeholder="Enter hospital name" class="medium" />
                            </td>
                         </tr>
                         <tr>
                            <td>
                                <label>location</label>
                            </td>
                            <td>
                                <input type="text" name="location" placeholder="Enter the location" class="medium" />
                            </td>
                         </tr>
                         <tr>
                            <td>
                                <label>Phone</label>
                            </td>
                            <td>
                                <input type="text" name="phone" placeholder="Enter the doctor's  contact" class="medium" />
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