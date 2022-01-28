<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname="cse-2k18";
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
  $file=$_FILES['assignment'];
  $filename=$file['name'];
  $filepath=$file['tmp_name'];
  $fileerror=$file['error'];
  if($fileerror==0){
    $destfile='uploads/'.$filename;
    echo "$destfile";
    move_uploaded_file($filepath,$destfile);
    $insertquery="INSERT INTO web_tech(assignments) VALUES('$destfile')";
    $query=mysqli_query($con,$insertquery);
    if($query){
         echo "INSERTED";
          header("refresh:2;url=ms_rep.php");
    }else{
       echo"not INSERTED";
    }
  }
}


?>
