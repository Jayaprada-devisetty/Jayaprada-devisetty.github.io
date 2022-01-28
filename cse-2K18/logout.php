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


       header("refresh:1;url=index.php");
               }
   ?>
