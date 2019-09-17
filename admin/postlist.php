<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th width="5%">NO.</th>
					<th width="15%">Post Title</th>
					<th width="20%">Description</th>
					<th width="10%">Category</th>
					<th width="10%">Image</th>
			     	<th width="10%">Author</th>
					<th width="10%">Tags</th>
					<th width="5%">Date</th>
					<th width="15%">Action</th>
				</tr>
			</thead>
			<tbody>
	  <?php
       $query="SELECT *FROM tbl_post";
       $squery=$db->select($query);
       if($squery){
       	$no=0;
       	while($result=$squery->fetch_assoc())
       	{  ?>
				<tr class="odd gradeX">
					<td><?php echo ++$no;?></td>
					<td><?php echo $result['title'];?></td>
					<td><?php echo $fm->short($result['body'],100);?></td>
					<td><?php echo $result['tags'];?></td>
					<td><img src="<?php echo $result['image']; ?>" height="40px" width="60px"/></td>
					<td><?php echo $result['author'];?></td>
					<td><?php echo $result['date'];?></td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td>
				</tr>
			<?php 	} } ?>	
			</tbody>
		</table>

       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
