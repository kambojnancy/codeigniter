
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>Register User</h2>
  <form action="<?php echo base_url('index.php/welcome/registration'); ?>" method="post">
    <?php if(isset($message)) {echo $message; } ?>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="user">Email</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" >
    </div>
    <div class="form-group">
      <label for="user">User Name</label>
      <input type="text" class="form-control" placeholder="Enter User Name" name="username" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label >User Type:</label>
      <Select class="form-control" name="user_type" required>
        <option>Select User Type</option>
        <option value="U">U(Guest User)</option>
        <option value="A">A(Admin)</option>
      </Select>
    </div>
    <button type="submit" name="register" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

