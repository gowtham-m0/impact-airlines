<?php
header('Location:/html/payment.html');
$server='localhost';
$username ='root';
$password = '';
$database='airlines';
$conn=new mysqli($server,$username,$password,$database);

$city=$_POST['city'];
$sql="Insert into registration(city) values('$city')";
$result=mysqli_query($conn,$sql);

?>
