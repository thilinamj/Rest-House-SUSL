
<?php session_start(); ?>
<?php require_once('connection.php')  ;?>

<?php

$errors=array();

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from admin where username='$username' and password='$password'";
$result=mysqli_query($connection,$query);

if($result){
if(mysqli_num_rows($result)==1)

{

$admin = mysqli_fetch_assoc($result);
$_SESSION['userid'] = $admin['id'] ;  
header("location:dashboard.php");
}


else
{
 
echo "<script>alert('Error Login')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <link rel="stylesheet" href="css/modify.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/animate.css">




    

</head>
<body>

<nav class="navbar navbar-inverse header-nav">
  
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <div class="logo"><img src="images/logo.png" alt="logo"></div>
        <div class="name">Sabaragamuwa University <br>of Sri Lnaka</div>



      </a>
    </div>

    <div class="nav_links">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/SUSL%20Resevation/">Home</a></li>
      
    </ul>

    

    <div class="nav_Sign">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
  

    </ul>
  </div>
  </div>
</nav>




<div class="container" style="width:400px;margin-top:150px">

<div class="card ">
	<h2>Login</h2>

<div class="card-body">
	

	

    <form class="form-group" action="login.php" method="post">

    <label>User name:</label><br>
    <input type="text" name="username" class="form-control" placeholder="Email Address"><br>
    <label>Password:</label><br>
    <input type="password" name="password" class="form-control" placeholder="enter password"><br>
    <input type="submit" name="submit" id="ab1" class="btn btn-primary"> 
    </form>


</div>
</div>

   
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>