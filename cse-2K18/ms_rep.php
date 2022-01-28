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
  $q1="SELECT * FROM images";
  $result1=mysqli_query($con,$q1) or die("bad query");
  $r1=mysqli_fetch_array($result1);
  $q2="SELECT * FROM indexdata where semester=1 ";
  $result2=mysqli_query($con,$q2) or die("bad query");
  $r2=mysqli_fetch_array($result2);
?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
     <meta charset="utf-8">
       <link rel="stylesheet" href="home.css?version=51">
     <title>cse-2k18</title>
 </head>
<body>
 <section class="headsec">
      <div class="header">
           <div class="icon" > <img  class="logo1" src="<?php echo $r1['image']?>" alt="logo" width="100px" height="100px"><br></div></td>
           <div  class="college"><h1 style="color:#004764">JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY<br></h1><h2 style="color:#F04393" > Computer Science and Engineering </h2></div>
      </div>
 </section>
 <section class="navsec">
   <div class="left">
        <h1 class="subject">WEB TECHNOLOGIES</h1>
   </div>
 <div class="nav right">
   <ul>
     <li class="navlink"><a  href="#syllabus">SYLLABUS</a></li>
     <li  class="navlink"><a  href="">REFERENCES</a></li>
     <li  class="navlink"><a  href="">ASSIGNMENTS</a></li>
     <li  class="navlink"><a  href="">ATTENDANCE</a></li>
     <li  class="navlink"><a  href="">QUESTION PAPERS</a></li>
   </ul>
 </div>
<section>

  <section class="assignment_upload">

    <form  action="refer.php" method="post" enctype="multipart/form-data">
    <label>Upload References</label>
    <input type="file" name="Refer" >
    <input type="submit" name="submit" >
    </form><br><br>

    <form  action="assignment.php" method="post" enctype="multipart/form-data">
    <label>Upload Assignment</label>
    <input type="file" name="assignment" >
    <input type="submit" name="submit" >
  </form><br><br>

  <form  action="Attendance.php" method="post" enctype="multipart/form-data">
  <label>Upload Attendance</label>
  <input type="file" name="Attendance" >
  <input type="submit" name="submit" >
  </form><br><br>

  <form  action="que_papers.php" method="post" enctype="multipart/form-data">
  <label>Upload Question Papers</label>
  <input type="file" name="que_papers" >
  <input type="submit" name="submit" >
  </form>

  </section>



</body>
 </html>
