
<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname="cse-2k18";
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} /*
 echo "connection successful";*/
if(isset($_POST['submit'])){
      $query=$_POST['query'];
      $rollno=$_POST['rollno'];
      $q10="INSERT INTO queries (query,rollno) VALUES('$query','$rollno')";
     mysqli_query($con,$q10) or die( /*"bad query"*/);
       header("refresh:2;url=student.php");
               }
   ?>
