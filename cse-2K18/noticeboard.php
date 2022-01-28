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
      $notice=$_POST['notice'];
      $date=$_POST['date'];

      $q10="INSERT INTO noticeboard (date,notice) VALUES('$date','$notice')";
     mysqli_query($con,$q10) or die( /*"bad query"*/);
       header("refresh:1;url=representative.php");
               }
   ?>
