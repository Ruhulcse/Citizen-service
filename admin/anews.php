<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add local news about the city</h2>
                 <h2><a href="all_news.php">View all news</a></h2>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $title =mysqli_real_escape_string($db->link, $_POST['title']);
    $cat   =mysqli_real_escape_string($db->link, $_POST['cat']);
    $body  =mysqli_real_escape_string($db->link, $_POST['body']);
    $author=mysqli_real_escape_string($db->link, $_POST['author']);

    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;

    if( $title == "" || $cat == "" || $body== "" || $author== "" || $file_name == "")
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
    $query = "INSERT INTO news(title,cat, image,body,author) VALUES('$title', '$cat','$uploaded_image','$body', '$author')";
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
                 <form action="anews.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       <tr>
                            <td>
                                <label>Title: </label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter the news title" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <input type="text" name="cat" placeholder="1.for education,2.politics,3.sports,4.religious,5.intertainment" class="medium" />
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
                                <label>Posted by</label>
                            </td>
                            <td>
                                <input type="text" name="author" placeholder="Enter your name" class="medium" />
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