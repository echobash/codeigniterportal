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
<?php 
?>
<div class="container">
   <form class="form-horizontal" action="<?php echo base_url('admin/home/add');?>" method="post">
   <input type="hidden" name="id" value="<?php echo $result->id;?>">
   <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" readonly ="readonly" value="<?php echo $result->username?>" >
         <span style="color:red"><?php echo form_error("username"); ?></span>
      </div>
    </div>
    <!--  <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="password"  required placeholder="Enter password" value="<?php echo $result->password?>"  name="password">
         <span style="color:red"><?php echo form_error("password"); ?></span>
      </div>
    </div> -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" required placeholder="Enter email" value="<?php echo $result->email;?>" name="email">
         <span style="color:red"><?php echo form_error("email"); ?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fullmame">Fullname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fullname" required placeholder="Enter Fullname" value="<?php echo $result->fullname?>" name="fullname">
         <span style="color:red"><?php echo form_error("fullname"); ?></span>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="role">Role:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Role" required placeholder="Enter Role" value="<?php echo $result->role;?>" name="role">
         <span style="color:red"><?php echo form_error("role"); ?></span>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="submit"></label>
      <div class="col-sm-10">
        <input type="submit" class="form-control" id="update"  value="update" name="update">
      </div>
    </div>
     

   
    
    
  </form>
</div>

</body>
</html>

