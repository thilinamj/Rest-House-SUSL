
<?php session_start(); ?>
<?php require_once('connection.php')  ;?>
<?php 

if (!isset($_SESSION['userid'])){
	header('location: login.php');

}

$rlist='';
$query="select * from applied ORDER BY id";
$result=mysqli_query($connection,$query);

if($result){
	while($applied = mysqli_fetch_assoc($result)){
       $rlist .= "<tr>";
       $rlist .= "<td>{$applied['id']}</td>";
       $rlist .= "<td>{$applied['name']}</td>";
       $rlist .= "<td>{$applied['email']}</td>";
       $rlist .= "<td>{$applied['phone']}</td>";
       $rlist .= "<td ><a href=\"delete.php?listid={$applied['id']}\">Delete</td>";
       $rlist .= "</tr>";


	}

}else{
	echo "database query faild";
}

/*function get_request_list(){
    global $connection;
    $query="select * from applied";
    $result=mysqli_query($connection,$query);
    while ($row=mysqli_fetch_array($result)){

       

       $id=$row['id'];
       $name=$row['name'];
       $email=$row['email'];
       $phone=$row['phone'];
     
       echo"<tr>
       <td>$id</td>
      <td>$name</td>
      <td>$email</td> 
      <td>$phone</td>
      <td><a href="edit.php">edit</a></td>
      
      
      </tr>";

    }
}
*/

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
      <li class="active"><a href="">wel come Admin</a></li>
      
    </ul>

    

    <div class="nav_Sign">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="login.php><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

    </ul>
  </div>
  </div>
</nav>



  <div class="jumbotron" style="background:url('images/bag.jpg')no-repeat;background-size:cover;height:300px;"></div>

<div class="card mt-5">
<div class="card-header"><h2>Required Details</h2></div>
<div class="card-body">
<table class="table table-bordered">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>phone </th>
		<th>Action</th>
	</tr>




    <?php echo $rlist;?>
    


</table>
</body>
</html>
