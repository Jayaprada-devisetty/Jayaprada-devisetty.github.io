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
           <div>
             <form class="logout" action="logout.php" method="post">
                  <button  class="logoutbtn" type="submit" name="submit">LOGOUT</button>
             </form>

           </div>
      </div>
 </section>
 <section class="mainsec">
     <div class=" info">
             <div class="info-left">
                     <table>
                          <tr height="50px" ><td >  <p style="color:#00081B">Year of study: &ensp;</td><td>  <?php  echo $r2['year_of_study']?></p></td></tr>
                          <tr height="50px"  ><td>   <p style="color:#00081B">Semester:</td>  <td> <?php  echo $r2['semester']?></p></td></tr>
                          <tr height="50px" ><td>   <p style="color:#00081B">Year:  </td> <td><?php  echo $r2['year']?></p></td></td>  </tr>
                          <tr height="50px" ><td >  <p style="color:#00081B"> CRC:  </td>  <td><?php  echo $r2['CRC']?></p></td></tr>
                          <tr height="50px" ><td>  <p style="color:#00081B"> CR: </td>  <td><?php  echo $r2['cr']?></p></td></tr>
                          <tr height="50px" ><td>  <p style="color:#00081B"> GR:</td> <td> <?php  echo $r2['gr']?></p></td></tr>
                          <tr height="60px" ><td><p style="color:#00081B"> Subjects: </td> <td><?php  echo $r2['subjects']?></p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A55401: </td> <td><a href="ms_rep.php">&ensp;<?php  echo $r2['sub1']?></a> </p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A50501:</td>  <td><a href="#">&ensp;<?php  echo $r2['sub2']?></a></p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A50502: </td> <td><a href="#">&ensp;<?php  echo $r2['sub3']?></a></p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A50505:  </td>  <td><a href="#">&ensp;<?php  echo $r2['sub4']?></a></p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A50503:</td> <td><a href="#">&ensp;<?php  echo $r2['sub5']?></a></p></td></tr>
                          <tr height="60px" ><td>    <p style="color:#00081B"> 17A50504:  </td>  <td><a href="#">&ensp;<?php  echo $r2['sub6']?></a></p></td></tr>
                          <tr height="60px" ><td>  <p style="color:#00081B"> 17A50506: &ensp;</td>  <td style="padding-left:7px"> <a href="#"><?php  echo $r2['sub7']?></a></p></td></tr>
                          <tr height="60px" >  <td>    <p style="color:#00081B"> 17A50507:  &ensp;</td>  <td style="padding-left:7px"><a href="#"><?php  echo $r2['sub8']?></a></p></td></tr>
                          <tr height="60px" ><td><p style="color:#00081B"> 17A59902:  </td>  <td>&ensp;<a href="#"><?php  echo $r2['sub9']?></a></p></td><br></tr>
                          <tr height="60px" ><td>    <p style="color:#00081B"> 17A50508: &ensp; </td>  <td style="padding-left:7px">  <a href="#"><?php  echo $r2['sub10']?></a></p></td></tr>
                     </table>
             </div>
             <div class="info-right">
                     <div class="panelmain">


              <div class="panel">
                 <div   class="a" style="background-color:#004764"><h1  style="color:#ffffff"><strong>Queries</strong></h1> </div>
                   <div class="ph">
                      <p  class="b">
                     <?php
                     $q5="SELECT query FROM queries";
                       $result5=mysqli_query($con,$q5) or die("bad query");
                        while($r5=mysqli_fetch_assoc($result5)){
                          echo $r5['query']; ?><br></br><?php
                        }
                     ?>
                   </p>
                  </div>
             </div>   <br><br>
        </div>
        <section class="querysec">
          <div class="queryform">
            <div class="query1">
              <form class="query2" action="query_answered.php" method="post">
                <input class="query3" type="text" name="query"  placeholder="query..."  required></input><br><br>
                <input  class="query4" type="text" name="answer"    placeholder="answer"  required></input><br><br>
                <button  class="query5" type="submit" name="submit">submit</button>
              </form>

            </div>
          </div>
        </section>
        <section class="querysec">
          <div class="queryform">
            <div class="query1">
              <form class="query2" action="noticeboard.php" method="post">
                <input class="query3" type="text" name="notice"  placeholder="notice..."  required></input><br><br>
                <input class="query3" type="text" name="date"  placeholder="date"  required></input>
                <button  class="query5" type="submit" name="submit">submit</button>
              </form>

            </div>
          </div>
        </section>
        <section class="querysec">
          <div class="queryform">
            <div class="query1">
              <form class="query2" action="event.php" method="post">
                <input class="query3" type="text" name="event"  placeholder="event..."  required></input><br><br>
                   <input class="query3" type="text" name="date"  placeholder="date"  required></input>
                <button  class="query5" type="submit" name="submit">submit</button>
              </form>

            </div>
          </div>
        </section>

  </div>
</div>
</section>


</body>
 </html>
