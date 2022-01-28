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
  $q1="SELECT * FROM indexdata where semester=1 ";
  $result=mysqli_query($con,$q1) or die("bad query");
  $row=mysqli_fetch_array($result);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>CSE-2k18</title>
  </head>
  <body class="page1">
   <div class="layer">
     <div>
        <h2 class=" header">JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY</h2>
     </div>

       <div class="desc">
         <h3 id="branch"><?php  echo $row['branch']?></h3><br>
                          <p>YEAR OF STUDY:<?php  echo $row['year_of_study']?></p><br>
                        <p>SEMESTER:<?php  echo $row['semester']?></p><br>
                          <p>YEAR:<?php  echo $row['year']?></p><br>
                           <p> CR:<?php  echo $row['cr']?></p><br>
                              <p> GR:<?php  echo $row['gr']?></p><br>
                                <p> CRC:<?php  echo $row['CRC']?></p>
       </div>
      <div class="buttons">
        <button  onclick="location.href='signin.html'" class="btn1" type="button" name="signin">SIGNIN</button>

        <button   onclick="location.href='signup.html'" class="btn2"type="button" name="signup">SIGNUP</button>
      </div>
<div class="pictures">
  <img src="<?php   echo $row['cr_img']?>" alt="CR" width="100px" ;height="100px"><br>
  <p>CLASS REPRESENTATIVE</p><br>
  <img src="<?php   echo $row['gr_img']?>" alt="GR" width="100px" ; height="100px">
  <p>GIRLS REPRESENTATIVE</p>
</div>
   </div>
  </body>
</html>
