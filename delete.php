
<?php require_once('connection.php')  ;?>
<?php 



if(isset($_GET['id'])){
	$id=mysqli_real_escape_string($connection,$_GET['id']);
	

$sql = "DELETE FROM applied WHERE id";

if (mysqli_query($connection, $sql)) {
	 header('location: dashboard.php');
   
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}




}


?>