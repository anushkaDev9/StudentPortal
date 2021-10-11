


 
 <?php
 $host="localhost";
$username="root";
$password="";
$db="StudentPortal";

$password1=filter_input(INPUT_POST, 'password');

$regno=filter_input(INPUT_POST, 'Rno');
$conn=new mysqli($host,$username,$password,$db);
if($conn->connect_error){
    echo $conn->connect_error;
}else{
    
}
$query="SELECT * FROM register WHERE Regno='$regno'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Password']==$password1){
         
    }else{
        echo 'Wrong Password';
        header('location:index.php');
        
    
}
}
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <!--Connecting database -->
  

    
            
        

<!--html -->
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
           <link rel="stylesheet" href="CSS.css" type="text/css">
           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
           <script src="jquery.js" type="text/javascript"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
               
    <!--jquery-->
     

<script>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

         $(document).ready(function(){
             
             $('#logout').hide();
            $("#marks").hide();
            
            $("#attendance").hide();         
            
            $("#events").hide();
            $("#timetable").hide();
           
            $("#eventsli").on('click',function(){
                  $("#events").show();
                  $("#home").hide();
                
                  $("#attendance").hide();
                  $("#timetable").hide();
                  $("#marks").hide();
                   $('#logout').hide();
            });
            $("#homeli").on('click',function(){
                   $("#events").hide();
                   $("#home").show();
                   
                   $("#timetable").hide();
                   $("#attendance").hide();
                  $("#marks").hide();
                   $('#logout').hide();
            });
             
           $("#timetableli").on("click",function(){
                 $("#attendance").hide();
                 $("#timetable").show();
                 $("#events").hide();
                 $("#home").hide();
                 $("#cal").hide();
                 $("#marks").hide();
                  $('#logout').hide();
           });
           
       
           $("#attendanceli").on("click",function(){
             $("#attendance").show();
             $("#timetable").hide();
             $("#events").hide();
             $("#home").hide();
           
             $("#marks").hide();
              $('#logout').hide();
           });
           $("#marksli").on("click",function(){
              $("#marks").show();
          
              $("#timetable").hide();
              $("#events").hide();
              $("#home").hide();
              
              $("#attendance").hide();
               $('#logout').hide();
            });
      $('#logoutli').on('click',function(){
          $("#feb").hide();
              $("#jan").hide();
              $("#timetable").hide();
              $("#events").hide();
              $("#home").hide();
          
              $("#attendance").hide();
               $("#marks").hide();
               $('#logout').show();
      });
});


</script>
<!-- css -->
  <style>
      #home p{
          font-size:20px;
          font-family: serif;
      }
      #home{
          border: 4px solid black;
          box-shadow: 30px 30px 40px rgba(0,0,0,0.3);
          border-radius: 10px;
      }
      #home h2{
          color:chocolate;
          
      }
      #home li{
          font-size: 25px;
          font-family: serif;
      }
      #nav{
          background-color: transparent;
          height: 60px; 
      }
      #nav ul{
          list-style-type: none;
          
      }
      #nav li{
          float:left;
          color: #6666ff;
      }
      #nav li a{
          text-decoration: none;
          padding-right: 20px;
          font-size: 40px;
          color: white;
          font-family:cursive;
      }
      body{
          background-color: #00cc99;
      }
     
      

#nav li a:hover {
  text-decoration: none;
  background-color:black;
  color:#ff3399;
 
}

#nav a:active {
  text-decoration: underline;
}
#home{
    background-color: white;
    height: 700px;
    width: 60%;
}
#events{
    background-color: white;
    height: 700px;
    width: 60%; 
    border-radius: 10%;
    border: 2px #6666ff dotted;
    margin-top: 20px;
    box-shadow: 20px 20px 20px 40px rgba(0,0,0,0.3);
}

#events h2{
   font-size: 40px;
   text-align:center;
   font-family: Sofia;
   color: #cc99ff
}
#h2{
    border-bottom: 2px solid #ffcccc;
   
}
#events li{
    font-size: 30px;
}
#events li a{
    text-decoration: underline;
    
}
#ul1{
    color: #00cc99;
    border-bottom: 2px solid #330033;
    margin-right: 20px;
}
#ul2{
    color: #ffcc33;
    border-bottom: 2px solid #330033;
    margin-right: 20px;
}
#ul3{
    color: #003366;
    border-bottom: 2px solid #330033;
    margin-right: 20px;
    
}

h1{
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 2px 2px 2px black;
    color: red;
}
/*
#calendar-rap{
    margin: auto;
    border: 2px solid white;
}
*/



  
   

#tt{
    background-color: #ccccff;
    color:crimson;
    margin-top: 70px;
    border: 2px #333300 dashed;
}
#new:hover{
    background-color: #009966;
    color:plum;
}
#examss:hover{
    background-color: limegreen;
}


#markst {
    width: 100%;
    height: 20px;
    
    border: 2px  #ccccff groove;
}
#markst th{
    padding: 20px;
    border: 2px  #ccccff groove;
     font-size: 30px;
     font-family: cursive;
     background-color: #ccffcc;
     color: #cc0099;
}
#markst td{
    padding : 20px;
   border: 2px  #ccccff groove;
   background-color: #cccccc;
   font-family: sans-serif;
   font-size: 25px;
}
#slot {
    height: 100px;
    width:50%;
    
}
#slot table{
   width: 100%;
    height: 20px;
    margin-left: 350px;
    border: 2px  #ccccff groove;
}
#slot th{
    padding: 20px;
    border: 2px  #ccccff groove;
     font-size: 30px;
     font-family: Sofia;
     background-color: #66ff99;
     color: #cc0099; 
}
#slot td{
   padding: 20px;
    border: 2px  #ccccff groove;
     font-size: 30px;
     font-family: serif;
     background-color: #ccccff;
     color: #330033; 
}
#attendance table{
    width: 50%;
    height: 20px;
    margin-left:280px;
    margin-top: 40px;
    border: 4px  #ccccff solid;
}
#attendance td{
    padding: 20px;
    border: 4px  #000000 solid;
     font-size: 30px;
     font-family: inherit;
     background-color: #ffccff;
     color: #ff0033;
}
#attendance th{
    padding: 20px;
    border: 4px black solid;
     font-size: 30px;
     font-family: inherit;
     background-color: #ccccff;
     color:#009900;
}

@media(max-width: 1000px){
    body{
        background-color: #990099;
    }
    h1{
        text-align: left;
    
    }
    #calendar{
        margin-left: 10px;
    }
    #nav li{
       clear:both;
       padding-left:0px;
    }
}
      </style>
     
    </head>
    <body>
        <div class="container-fluid" id="nav">
            <ul>
                <li id="homeli"><a href="#home">Home<i class="fas fa-home"></i></a></li>
                <li id="attendanceli"><a href="#attendance">Attendance<i class="fas fa-edit"></i></a></li>
                <li id="timetableli"><a href="#imetable">Time Table<i class="fas fa-clock"></i></a></li>
                <li id="marksli"><a href="#marks">Marks<i class="fas fa-file-signature"></i></a></li>
                
                <li id="eventsli"><a href="#events">Events<i class="fas fa-calendar-day"></i></a></li>
                <li id="logoutli"><a href="index.php">Logout<span class="glyphicon glyphicon-log-out"></span></a></li></li
            </ul>
        </div>
        <div id="home" class="container-fluid">
            <p>A student portal is a commonly used phrase to describe the login page where students can 
                provide a username and password to gain access to an education organization's programs 
                and other learning related materials. 
            </p>
            <h2>HOW DOES A STUDENT PORTAL WORK?</h2>
            <p>A student portal is usually part of a broader LMS that can also be used by parents and faculty members. 
                This system is also usually built and managed in-house by the college/university, school district, or 
                private educational institution. Students typically use their school-provided email address or
                student ID number to access the portal, 
                and sometimes additional layers of authentication are required to verify the student's identity.
            </p>

<h2>There are 4 models:</h2>
<p> <ul><li>First is <b>Attendance</b> where the student can see the total classes conducted and how many classes attended , how many not attended.</li><br>
    <li>The second is <b>Time Table </b> where the student can see the time table and their subject.</li><br>
    <li>The third is <b>Marks</b> where the student can see the marks of every subject and of every exam conducted</li><br>
    <li>The fourth is <b>Events</b> where the student can see the events happening .</li><br>
    
</p>
        </div>
        <div id="events" class="container-fluid">
            <div id="h2" class="container-fluid">
            <h2>List of upcoming events!</h2>
            </div>
            <ul>
                <div id="ul1">
                    <li><b><u>Event 1:-</u></b><br> ->This event is a workshop on web development held on 4<sup>th</sup> July 2021!<br>
                    ->To know more and to register <a href="#">click here</a> .<br>
                </li>
                </div>
                <div id="ul2">
                    <li><b><u>Event 2:-</u></b><br> ->This event is on  hackathon competition  held on 21<sup>th</sup> July 2021!<br>
                    ->To know more and to register <a href="#">click here</a> .<br>
                </li>
                </div>
                 <div id="ul3">
                    <li><b><u>Event 3:-</u></b><br> ->This event is on  techinal aspects which is going to be held on 2<sup>nd</sup> August 2021!<br>
                    ->To know more and to register <a href="#">click here</a> .<br>
                </li>
                </div>
            </ul>
            
        </div>
        <div class="container-fluid" id="attendance">
            <table>
                <tr>
                    <th>Subject</th>
                     <th>Subject Code</th>
                      <th>Total Classes</th>
                      <th>Present </th>
                       <th>Absent</th>
                       
                </tr>
                <?php 
                $selectA = "SELECT * FROM attendance WHERE Regno='$regno'";
                $resulta=mysqli_query($conn,$selectA);
                while($rowa=mysqli_fetch_array($resulta,MYSQLI_ASSOC)){
                    echo "<tr><td>";
                    echo $rowa['Subject'];
                    echo "</td><td>";
                    echo $rowa['SubjectCode'];
                    echo "</td><td>";
                    echo $rowa['TotalClasses'];
                    echo "</td><td>";
                    echo $rowa['Present'];
                    echo "</td><td>";
                    echo $rowa['Absent'];
                    echo "</td></tr>";
                    
                   
                }
                ?>
                
            </table>
        </div>
        <div class="container-fluid" id="marks">
            <table id="markst">
                <tr>
                    <th>Subject</th>
                    <th>Subject Code</th>
                    <th>Exam1</th>
                    <th>Exam2</th>
                    <th>Exam3</th>
                </tr>
               <?php 
               
               $select="SELECT DISTINCT * FROM marks WHERE Regno='$regno'";
               $resulti= mysqli_query($conn, $select) or die('error'); 
               while($row=mysqli_fetch_array($resulti,MYSQLI_ASSOC)){
                   echo "<tr><td>";
                   echo $row['Subject'];
                   echo "</td><td>";
                   echo $row['SubjectCode'];
                   echo "</td><td>";
                   echo $row['Exam1'].'/10';
                   echo "</td><td>";
                   echo $row['Exam2'].'/50';
                   echo"</td><td>";
                   echo $row['Exam3'].'/50';
                    echo"</td></tr>";
               }
                ?>
                    
                    `
                   
                   
            </table>
        </div>
        
            
            
                      
                       
                          
                     

        <div class="container-fluid" id="timetable">
           <table border="5" cellspacing="0" align="center" id="tt">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="50" 
                width="130"><br>
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50" 
                width="130">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50" 
                width="130">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>12:00-12:40</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>V<br>1:30-2:20</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VI<br>2:20-3:10</b>
            </td>
            <td align="center" height="50" 
                width="100">
                <b>VII<br>3:10-4:00</b>
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Monday</b></td>
            <td align="center" height="50">A</td>
            <td align="center" height="50">A</td>
            <td align="center" height="50">C</td>
            <td rowspan="6" align="center" height="50">
                <h2>L<br>U<br>N<br>C<br>H</h2>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB(B)</td>
            <td align="center" height="50">D</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Tuesday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB(D)
            </td>
            <td align="center" height="50">A</td>
            <td align="center" height="50">C</td>
            <td align="center" height="50">C</td>
            <td align="center" height="50">E</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50">B</td>
            <td align="center" height="50">B</td>
            <td align="center" height="50">C</td>
            <td align="center" height="50">F</td>
            <td colspan="3" align="center" 
                height="50">LAB(A)
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Thursday</b>
            </td>
            <td align="center" height="50">D</td>
            <td align="center" height="50">D</td>
            <td align="center" height="50">A</td>
            <td colspan="3" align="center" 
                height="50">LAB(C)
            </td>
            <td align="center" height="50">Mat</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Friday</b>
            </td>
            <td colspan="3" align="center" 
                height="50">LAB(D)
            </td>
            <td align="center" height="50">A</td>
            <td align="center" height="50">C</td>
            <td align="center" height="50">H</td>
            <td align="center" height="50">H</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Saturday</b>
            </td>
            <td align="center" height="50">A</td>
            <td align="center" height="50">G</td>
            <td align="center" height="50">B</td>
            <td colspan="3" align="center" 
                height="50">LAB
            </td>
            <td align="center" height="50">G</td>
        </tr>
    </table>
            <br>
            <br>
            <div class="slot" id="slot">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Subject Code</th>
                        <th>Slot</th>
                    </tr>
                    <?php 
                    $select1="SELECT * FROM slot WHERE Regno='$regno'";
                    $result1=mysqli_query($conn,$select1) or die("connection failed");
                   while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                       echo "<tr><td>";
                       echo $row['Subject'];
                       echo"</td><td>";
                       echo $row['SubjectCode'];
                       echo "</td><td>";
                       echo $row['Slot'];
                       echo"</td></tr>";
                   }
                    ?>
                </table>
                <br>
                <br>
            </div>
        </div>      
        
        </div>
       
          
         
        
     
    </body>
</html>
