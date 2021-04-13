<?php
 session_start();
header('location:login.php');
$hostname='localhost';
$username='root';
$userpass='';
$dbname='ecom';

$con=mysqli_connect($hostname,$username,$userpass) or die ('Database Connection fail');

mysqli_select_db($con,$dbname);


$name= $_POST['name'];
$email=$_POST['email'];
$mobile= $_POST['mobile'];
$pass=$_POST['password'];
$s=" select*from users where user='$name'";
$result=mysqli_query($con,	$s);
$num=mysqli_num_rows($result);

if($num==1){
  
    echo "Username Already Taken";
}else{

    $reg="insert into users(name,password,email,mobile)values('$name','$pass','$email','$mobile')";
    mysqli_query($con,$reg);
    echo "Registration is successfull!";
}

?>