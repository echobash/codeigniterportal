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
	<title>employee Dashboard</title>
	<style>
		a{font-family: 'Montserrat', sans-serif;}
		span{font-family: 'Montserrat', sans-serif;font-size:50px;}
	</style>
</head>
<body>
	<div class="container">
		<div id="sessionFullName">
			<a style="float:right;font-size: 20px" href=" <?php echo base_url('admin/home/logout') ?>">Logout</a>
			<center><?php echo "<span>$employee_fullname</span>";?></center>
			<a href=" <?php echo base_url('employee/home/applyForLeave') ?> "><button type="button" class="btn btn-primary btn-lg">Apply For Leaves</button></a>
		</div>
	</div>
</body>
</html>