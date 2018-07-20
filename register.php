<?php>
$servername="localhost";
$username="root";
$password="";
$dbname="register";

$uname=$_POST["uname"];
$mail=$_POST["mail"];
$pno=$_POST["pno"];
$gen=$_POST["gen"];
$pass=$_POST["pass"];
$loc=$_POST["loc"];

$con =mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO table1 VALUES ('$uname','$mail','$pno','$gen','$pass','$loc')";

if (mysqli_query($con,$sql)) {
      echo "New record created successfully";
} else {
      echo "Error :".$sql."<br>".mysqli_error($con);
}

mysqli_close($con); 
?>