<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname="cse-2k18";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['signin'])){
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $usertype=$_POST['usertype'];
  $q1="SELECT * FROM users WHERE email='$email' AND password='$pwd'  ";
  $result= mysqli_query($conn,$q1)  or die("bad querey");
  $rowcount=mysqli_num_rows($result);
  if($rowcount==0){
		echo "Invalid credentials!";
       header("refresh:2;url=signin.html");
		exit;
  }
  $row = mysqli_fetch_assoc($result);
  header("location:$usertype.php");
 }
?>
