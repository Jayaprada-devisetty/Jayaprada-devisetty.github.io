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
        <h1 class="subject">MANAGEMENT SCIENCE</h1>
   </div>
 <div class="nav right">
   <ul>
     <li class="navlink"><a  href="#syllabus">SYLLABUS</a></li>
     <li  class="navlink"><a  href="#refer">REFERENCES</a></li>
     <li  class="navlink"><a  href="#assignments">ASSIGNMENTS</a></li>
     <li  class="navlink"><a  href="#Attendance">ATTENDANCE</a></li>
     <li  class="navlink"><a  href="#ques">QUESTION PAPERS</a></li>
   </ul>
 </div>
<section>


<section id="syllabus">

  <div class="panelmain_syll">

    <div class="panel">
      <div class="a" style="background-color:#004764"><h1 style="color:#ffffff"><strong >SYLLABUS</strong></h1> </div>
      <div class="ph_syll">
      <p  class="b">
        UNIT I<br>
Fundamentals: Introduction to the web, Web servers and clients, Resources, URL and its anatomy, message format, persistent and non persistent connections, Web caching, proxy, java and the net, java network classes and interfaces, looking up internet address, client/server programs, socket programming, e-mail client, POP3 programs, remote method invocation, example
Selectors<br><br>
UNIT II<br>
HTML: HTML and its flavors, HTML basics, Elements, Attributes and tags, Basic tags, Advanced Tags, Frames, Images, Meta tag, Planning of webpage, Model and structure for a website, designing web pages, Multimedia content.
Cascading Style Sheets: Advantages, Adding CSS, Browser, compatibility, CSS and Page layout, Selectors
<br><br>UNIT III<br>
Java Script: Introduction, Variables, Literals, Operators, Control structure, Conditional statements, Arrays,Functions, Objects, Predefined objects, Object hierarchy, Accessing objects, Events, Event handlers, Multiple windows and Frames, Form object and Element, Advanced JavaScript and HTML, Data entry and Validation, Tables and Forms, DHTML with JavaScript
<br><br>UNIT IV<br>
Server side programming: Internet programming paradigm, Server-side programming, Languages for CGI,Applications, Server environment, Environment variables, CGI building blocks, CGI scripting using C, Shell script, Writing CGI program, CGI security, Alternatives and Enhancement to CGI, Server-side Java, Advantages over applets, Servlet alternatives, Servlet strengths, Servlet Architecture, Servlet Life cycle, Generic and HTTP Servlet, First servlet, passing parameters to servlets, retrieving parameters, Server-side include, cookies, filters, Problems with servlet, Security issues, JSP and HTTP, JSP Engines, How JSP works, JSP and Servlet, Anatomy of a JSP Page, JSP syntax, JSP components.
<br><br>UNIT V<br>
Sever side programming continued: Beans, Session tracking, Users passing control and data betweenpages, Sharing session and Application data, Database connectivity, JDBC drivers, Basic steps, Loading a driver, Making a connection, Execute and SQL statement, SQL statements, Retrieving the result, Getting database information, Scrollable and updatable result set, Result set metadata, Introduction to JavaBeans, Bean builder, Advantages of Java Beans, BDK introspection, Properties, Bean Info interface, Persistence, Customizer, JavaBeans API, EJB, Introduction to Struts Framework.
          </p>
       </div>
    </div><br><br>
  </div>
  <a   class="syllabuspdf" href="R17.pdf" target="_">Download PDF now!!</a>
  <div class="refer">
    <p class="heading" id="refer">References</p>
    <div class="panelmain_ass">

      <div class="panel">
        <div class="a" style="background-color:#004764"><h1 style="color:#ffffff"><strong >References</strong></h1> </div>
        <div class="ph_ass">
     <table>
      <?php
    $selectquery1="SELECT Refer FROM web_tech";
    $query1 = mysqli_query($con,$selectquery1);
    while($result1 = mysqli_fetch_array($query1)){
     ?><tr >
     <a href="  <?php echo $result1['Refer'];  ?> "  class="links"> <?php echo $result1['Refer'] ?></a>
     </tr> <br><br><?php
    }
 ?>
   </table>
 </div>
</div>
</div>


   <div class="assignment">
     <p class="heading" id="assignments">Assignments</p>
     <div class="panelmain_ass">

       <div class="panel">
         <div class="a" style="background-color:#004764"><h1 style="color:#ffffff"><strong >Assignments</strong></h1> </div>
         <div class="ph_ass">

     <?php
     $selectquery="SELECT Assignments FROM web_tech";
     $query = mysqli_query($con,$selectquery);
     while($result = mysqli_fetch_array($query)){
      ?> <img src="  <?php echo $result['Assignments'];  ?> "  height="800px" width="730px">  <?php
     }
  ?></div>
</div>
</div><br><br>
</div>




<div class="refer">
  <p class="heading" id="Attendance">Attendance</p>
  <div class="panelmain_ass">

    <div class="panel">
      <div class="a" style="background-color:#004764"><h1 style="color:#ffffff"><strong >Attendance</strong></h1> </div>
      <div class="ph_ass">
   <table>
    <?php
  $selectquery2="SELECT Attendance FROM web_tech";
  $query2 = mysqli_query($con,$selectquery2);
  while($result2 = mysqli_fetch_array($query2)){
   ?><tr >
   <a href="  <?php echo $result2['Attendance'];  ?> "  class="links"> <?php echo $result2['Attendance'] ?></a>
   </tr> <br><br><?php
  }
?>
 </table>
</div>
</div>
</div>

<div class="refer">
  <p class="heading" id="ques">Question Papers</p>
  <div class="panelmain_ass">

    <div class="panel">
      <div class="a" style="background-color:#004764"><h1 style="color:#ffffff"><strong >Question Papers</strong></h1> </div>
      <div class="ph_ass">
   <table>
    <?php
  $selectquery3="SELECT que_papers FROM web_tech";
  $query3 = mysqli_query($con,$selectquery3);
  while($result3 = mysqli_fetch_array($query3)){
   ?><tr >
   <a href="  <?php echo $result3['que_papers'];  ?> "  class="links"> <?php echo $result3['que_papers'] ?></a>
   </tr> <br><br><?php
  }
?>
 </table>
</div>
</div>
</div>

</section>

</body>
 </html>
