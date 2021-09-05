<?php
$server="localhost";
$username="root";
$password="";
$dbname="companny";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
  die("error".mysqli_connect_error());
}
else{
 // echo "sucess connection to the database";
}
 $email = $_POST['email'];

$sql="INSERT INTO `company1` (`email`) VALUES ('$email');";

if($con->query($sql) == true){
  //echo "insert sucess";
}
else{
  echo "error".$sql."<br>".$con->error();
}
$con->close();
?>
