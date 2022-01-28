<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname="cse-2k18";
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['signup'])){

 $email=$_POST['email'];
 $username=$_POST['username'];
 $pwd=$_POST['pwd'];
 $cpwd=$_POST['cpwd'];
 $role=$_POST['role'];
 $q1="SELECT email FROM users WHERE email='$email'";
 $r1=mysqli_query($con,$q1) or die("bad query1");
 $count=mysqli_num_rows($r1);
 if($count>0){
   echo "$email already exists";
 }
 $q2="SELECT username FROM users WHERE username='$username'";
 $r2=mysqli_query($con,$q2) or die("bad query2");
 $count=mysqli_num_rows($r2);
 if($count>0){
   echo "$username already taken";
 }
  if($pwd==$cpwd){
    $q3="INSERT INTO users (email,username,password,c_password,role)VALUES('$email','$username','$pwd','$cpwd',' $role')";
  mysqli_query($con,$q3) or die( /*"bad query"*/);
       echo"successfully registered";
       header("refresh:2;url=signin.html");
            }
 else{
   echo "password fields should match";
 }
}
 ?>
