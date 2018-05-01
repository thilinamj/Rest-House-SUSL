<?php require_once('connection.php')  ;


if(isset($_POST['appsubmit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adate= date('dd-mm-yyyy',strtotime($_POST['adate']));
$ddate=date('dd-mm-yyyy',strtotime($_POST['ddate']));


$query="INSERT INTO applied(name,email,phone,adate,ddate)values('$name','$email','$phone','$adate','$ddate')";
$result=mysqli_query($connection,$query);
if($result){



    
  
echo  "<script>alert('Registered Successful!')</script>";
    //echo "<script>window.open('Applied.php','_self')</script>";
   

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


<link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">
  <!-- Easy Responsive Tabs -->
  <link rel="stylesheet" href="css/easy-responsive-tabs.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Theme Style -->
  


  
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Easy Responsive Tabs -->
    <script src="js/easyResponsiveTabs.js"></script>
    <!-- FastClick for Mobile/Tablets -->
    <script src="js/fastclick.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
 

    

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
  

  <div class="row">
    <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6 ">
        <a class="fh5co-card" href="#">
            <img src="images/4.jpg" alt="Agri" class="img-responsive" height="600px">
            <div class="fh5co-card-body">
               
                <p></p>
            </div>
        </a>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 ">
  
               <div class="fh5co-card-body">
                    <h3>Faculty of Applied Science</h3>
                    <p>The Sabaragamuwa University of Sri Lanka was established under the universitites Act Number 16 of 1978 on 7th November 1995 and ceremonially inaugurated on 2nd February 1996. Assigned to the University are the faculties of Agricultural Sciences , Applied Sciences, Geomatics, Management studies and Social Scences and Languages set up at Belihuloya in Rathnapura District of the Sabaragamuwa Province.</p>
                </div>




                    <form action="Applied.php" method="post">

                        <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="Name" class="form-control"  placeholder="Enter Name" name="name" required>
                              </div>

                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
                        </div>
                        

                        <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control"  placeholder="phone" name="phone" required>
                              </div>
                              



                              
                              <div class="row">

                              <div class="form-group">
                              <div class="col-lg-4 col-md-4 col-sm-4>
                                  
                             <label>Arrival</label>
                              <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                <input class=" form-control datepicker" type="text" value="12-02-2012" name="adate">
                                <span class="add-on"><i class="icon-th"></i></span>
                              </div>
                              <script type="text/javascript">
                                  $('.datepicker').datepicker()
                              </script>
                              </div>
                        

                            
                             
                              <div class="col-lg-4 col-md-4 col-sm-4>
                                    <label>Dearting</label>
                                     <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                       <input class=" form-control datepicker" type="text" value="12-02-2012" name="ddate">
                                       <span class="add-on"><i class="icon-th"></i></span>
                                     </div>
                                     <script type="text/javascript">
                                         $('.datepicker').datepicker()
                                     </script>
                                     </div>
                                    </div>
                              
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Your Package
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="#">HTML</a></li>
                                              <li><a href="#">CSS</a></li>
                                              <li><a href="#">JavaScript</a></li>
                                            </ul>
                                          </div>
                                    </div>
                                </div>
                            


                        <div class="row">
                            <div class="form-group">
                                  <button type="submit" name="appsubmit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                      </form>



               
           
        </div>
    


   

                

        </div>
</div>


</body>
</html>
