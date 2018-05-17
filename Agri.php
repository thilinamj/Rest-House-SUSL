


<?php require_once('connection.php')  ;
if(isset($_POST['agrisubmit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$Package=$_POST['Package'];
$adate=$_POST['adate'];
$ddate=$_POST['ddate'];

$query="INSERT INTO agri(name,email,phone,Package,adate,ddate)values('$name','$email','$phone','$Package','$adate','$ddate')";
$result=mysqli_query($connection,$query);
if($result){
    
  
echo  "<script>alert('Registered Successful!')</script>";
    //echo "<script>window.open('Agri.php','_self')</script>";
   
}
}
  
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/datepicker.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  
     


  
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
      <li class="active"><a href="index.php">Home</a></li>
      
    </ul>

    

    <div class="nav_Sign">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
</nav>

  
                            

                            
   <div class="container">
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Faculty of Agri Sciences</h4>
  <p>Wel come!,If you are a lecturer in sabaragamuwa University,Staff member,or student ,You can get this services.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>

                    

                    

<form action="Agri.php" method="post">
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="Name" class="form-control"  placeholder="Enter Name" name="name" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
     <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
    </div>
  </div>



  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="phone" class="form-control"  placeholder="phone" name="phone" required>
    </div>
  </div>



  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select Your Package</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Package" id="gridRadios1" value="Singale" checked>
          <label class="form-check-label" for="gridRadios1">
           Singale
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Package" id="gridRadios2" value="Double">
          <label class="form-check-label" for="gridRadios2">
            Double
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="Package" id="gridRadios3" value="Tripple" >
          <label class="form-check-label" for="gridRadios3">
           Tripple
          </label>
        </div>
      </div>
    </div>
  </fieldset>
 
   <div class="form-row">
    <div class="form-group col-md-4">
<label for="date">Arrival Date</label>
<input class="datepicker" data-date-format="mm/dd/yyyy" placeholder="Arrival Date" name="adate" > 
</div>

  <div class="form-group col-md-4">
<label for="date">Departure Date</label>
<input class="datepicker" data-date-format="mm/dd/yyyy"  placeholder="Departure Date" name="ddate" >
</div>


  <div class="form-group col-md-4"></div>
  </div>




  <div class="form-group row">
    <div class="col-sm-10">
         <button type="submit" name="agrisubmit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>












    <div>





   

                

        </div>
</div>


</body>
</html>

<script type="text/javascript">$('.datepicker').datepicker({
    startDate: '-3d'
});
</script>


