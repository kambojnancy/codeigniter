<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="<?php echo base_url('index.php/welcome/login'); ?>" ><button>Login</button></a></li>
      <li><a href="<?php echo base_url('index.php/welcome/register'); ?>"><button>Register</button></a></li>

    </ul>
  </div>
</nav>
  
<div class="container" >
	<!--  -->
  <h3>Both Guest and Authenticated users can see this page</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>

<footer class="footer" style="background:#000; color: #fff;padding:20px;margin-top:31%; ">
	<p>&copy; All rights Reserved By the Website.</p>
</footer>


</body>
</html>
