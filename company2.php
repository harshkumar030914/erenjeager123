<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "companny";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
  die("error".mysqli_connect_error());
}

$name=$_POST['name'];
$email2=$_POST['email2'];
$t2=$_POST['t2'];

$sql="INSERT INTO `comapny2` ( `name`, `email2`, `t2`, `date`) VALUES ( '$name', '$email2', '$t2', CURRENT_TIMESTAMP);";
if($con->query($sql) == true){
 //echo "inserted";
}
else{
  echo "eror";
}
$con->close();
?>
