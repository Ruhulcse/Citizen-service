<?php
session_start();
  if(isset($_SESSION['username'])){

  }
  else{
  	header("Location:login.php");
  }
?>
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">               
                  Welcome admin panel      
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>