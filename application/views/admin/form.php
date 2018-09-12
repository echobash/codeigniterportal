<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <form class="form-horizontal" action="<?php echo base_url('admin/home/add');?>" method="post">
   <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
         <span style="color:red"><?php echo form_error("username"); ?></span>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
         <span style="color:red"><?php echo form_error("password"); ?></span>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
         <span style="color:red"><?php echo form_error("email"); ?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fullmame">Fullname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">
         <span style="color:red"><?php echo form_error("fullname"); ?></span>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="role">Role:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Role" placeholder="Enter Role" name="role">
         <span style="color:red"><?php echo form_error("role"); ?></span>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="submit">Submit:</label>
      <div class="col-sm-10">
        <input type="submit" class="form-control" id="submit"  value="submit" name="submit">
      </div>
    </div>
     

   
    
    
  </form>
</div>

</body>
</html>

