<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<title>session</title>
	<style>
		.glyphicon-remove:before {content: "\e014";margin-left: 5px;}
		.box{margin:0 auto;font-size: 20px;}
		.container{margin: 0 auto;}
		table,td,tr,th{border:1px solid;border-collapse: collapse;}
		
	</style>
</head>
<body>

	<div class="container" >
		<div class="box">
		<?php 
				echo $this->session->flashdata("success");
				echo $this->session->flashdata("error");?>
			<a style="float:right" href=" <?php echo base_url('admin/home/logout') ?>">Logout</a>
			<center><?php  echo $admin_fullname;?></center> <!--- admin username on the session page -->
		</div>
		<a href=" <?php echo base_url('admin/home/addemployee') ?>"><button type="button" class="btn btn-primary btn-lg">Add User</button></a>

		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>username</th>
<!-- 						<th>password</th>
 -->						<th>email</th>
						<th>full name</th>
						<th>role</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$count=0; 
					foreach ($users as $row)  
					{  
						?>
					<tr>
						<td><?php echo ++$count; ?></td>
						<td><?php echo $row->username;?></td>
						<!-- <td><?php echo $row->password;?></td> -->
						<td><?php echo $row->email;?></td>
						<td><?php echo $row->fullname;?></td>
						<td><?php echo $row->role;?></td>
						<td><a href="<?php echo base_url('admin/home/editData?id='.$row->id);?>"><button class= "glyphicon glyphicon-edit"></button></a>
						<a href="<?php echo base_url('admin/home/deleteData?id='.$row->id); ?>"><button style="color:red;margin:1px;" class= "glyphicon glyphicon-remove"></button></a></td>
					</tr>
					  <?php }  
        			  ?>  

				</tbody>
			</table>
		</div>

	</div>
</div>

</body>
</html>