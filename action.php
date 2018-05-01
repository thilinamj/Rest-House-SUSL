<?php require_once('connection.php')  ;?>

<?php  
//action.php


$input = filter_input_array(INPUT_POST);

$name= mysqli_real_escape_string($connection, $input["name"]);
$email= mysqli_real_escape_string($connection, $input["email"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE applied 
 SET first_name = '".$name."', 
 last_name = '".$email."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connection, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM applied 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connection, $query);
}

echo json_encode($input);

?>
