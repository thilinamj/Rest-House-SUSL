
<?php require_once('connection.php')  ;?>

<?php

$errors=array();

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from admin where username='$username' and password='$password'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1)

{
header("location:dashboard.php");
}
else
{
 
echo "<script>alert('Error Login')</script>";
echo "<script>window.open('login.php','_self')</script>";

}
}
?>
<html>
<head>
    <title>Login Page</title>
   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<style>
#ab1:hover{cursor:pointer;}
</style>  

<body style="background:url('') no-repeat; background-size:cover;">
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