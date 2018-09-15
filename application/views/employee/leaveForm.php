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
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<style>
	.container{width:60%;padding-top: 15px;
		margin-top: 40px;
		border:1px solid black;
		border-radius: 5px;
		-webkit-box-shadow: 9px -5px 23px 0px rgba(38,33,38,0.3);
		-moz-box-shadow: 9px -5px 23px 0px rgba(38,33,38,0.3);
		box-shadow: 9px -5px 23px 0px rgba(38,33,38,0.3);}
			form{font-family: 'Montserrat', sans-serif;}
		</style>
	<title>Leave Form</title>
</head>
<body>
	<div class="container">
		<form class="form-horizontal" action="<?php echo base_url('employee/home/submitLeaveForm');?>" method="post">
			<div class="form-group">
				<label class="control-label col-sm-4" for="Workingtype">Working Type:</label>
				<div class="col-sm-7">
					 <select name="worktype" class="form-control" id="sel1">
					    <option>Leave</option>
					    <option>Work From Home</option>
					 </select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="leavefrom">Leave From(Date):</label>
				<div class="col-sm-4">
					<input type="date"  required class="form-control" id="leavefrom" placeholder="Enter Leave From(Date)" name="leaveFromDate" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="leaveto">Leave To(Date):</label>
				<div class="col-sm-4">
					<input type="date"   required class="form-control" id="leaveto" placeholder="Enter Leave to(Date)" name="leaveToDate" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="noofleaves">Number Of Leaves:</label>
				<div class="col-sm-7">
					<input type="text" required class="form-control" id="noofleaves" placeholder="Enter Number of leaves" name="noOfLeaves"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="typeofleaves">Type Of Leave:</label>
				<div class="col-sm-7">
					 <select class="form-control" name="typeOfLeaves" id="sel1">
					    <option>Full Day</option>
					    <option>Half Day</option>
					 </select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="Reasons">Reason For Leave:</label>
				<div class="col-sm-7">
					<textarea  required class="form-control" id="reason" placeholder="Enter Reson for leave" name="reason" rows="4"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="submit"></label>
				<div class="col-sm-7">
					<input type="submit" required class="form-control" id="noofleaves" name="submit"/>
				</div>
			</div>
		</form>
	</div>
</body>
</html>