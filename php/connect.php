<?php
header('Location:/html/slot.html');
$server='localhost';
$username ='root';
$password = 'pro@gowtham@pro';
$database='airlines';
$conn=new mysqli($server,$username,$password,$database);
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$sql="Insert into registration(email,fname,lname,city,mobile,pass,repass) values('$email','$fname','$lname','$city',$mobile,'$pass','$repass')";
$result=mysqli_query($conn,$sql);

?>