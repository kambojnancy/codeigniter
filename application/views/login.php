<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User Login</h2>
  <?php if(isset($msg)){echo $msg;}?>
  <form action="<?php echo base_url('index.php/welcome/loginuser') ?>" method="post">
    <div class="form-group">
      <label for="user">User Name</label>
      <input type="text" class="form-control" placeholder="Enter User Name" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" name="login" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

