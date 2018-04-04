
<?php require_once('connection.php')  ;?>

<?php
//check for submission
if(isset($_POST['submit'])){

	$errors=array();


//check if the username and password has been entered
if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
	
	$errors[]='username is Missing,Invalid';


}

if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
	
	$errors[]='password is Missing,Invalid';


}
// check if there are any error in the form

if(empty($errors)){

//save username and password into variables

$email= mysqli_real_escape_string($connection, $_POST['email']);
$password= mysqli_real_escape_string($connection, $_POST['password']);

//prepare database query
$query="SELECT * FROM user WHERE email='{email}' AND password='{password}' LIMIT 1";

$result_set=mysqli_query($connection,$query);

if($result_set){
	//quey succesfull

if(mysqli_num_rows($result_set)==1){

	//valid user found
	header('Location:users.php');


}else{
	//user name and password invalid
	$errors[]='Invalid username or Password';

}

}else{
	$errors[]='Database query falid';
}
//check if the user is valid
//redirect to users.php
//if not, display the error

}


//save username and password into variables
//prepare database query
//check if the user is valid
//redirect to users.php
//if not, display the error

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
	<?php
	if(isset($errors) && !empty($errors)){
		echo '<div class="error">Invalid User name Or Password</div>';
	}

	?>

    <form class="form-group" action="login.php" method="post">

    <label>User name:</label><br>
    <input type="text" name="email" class="form-control" placeholder="Email Address"><br>
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