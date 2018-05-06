<?php
session_start() ?>

<?php require_once('connection.php')  ;?>
<?php
if (!isset($_SESSION['userid'])){
  header('location:login.php');
}

?>

<?php

$query="select * from applied ORDER BY id";
$result=mysqli_query($connection,$query);



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
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

    </ul>
  </div>
  </div>
</nav>



  <div class="jumbotron" style="background:url('images/bag.jpg')no-repeat;background-size:cover;height:300px;"></div>

<div class="card mt-5">
<div class="card-header"><h2>Required Details</h2></div>
<div class="card-body">
<table class="table table-bordered">
     <thead>
      <tr>
       <th>ID</th>
       <th> Name</th>
       <th> email</th>
       <th>phone</th>
       <th>Action</th>
      </tr>
     </thead>
     <tbody>
     <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['phone']; ?></td>
      <td>
        <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
      </td>
      <td>
        <a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script> 


