 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
           <link rel="stylesheet" href="CSS.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<script src="jquery.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
    $('#Register').hide();
   
    $('#Loginbutton').on('click',function(){
        $('#login').show();
        $('#Register').hide();
    });
    $('#Registerbutton').on('click',function(){
        $('#login').hide();
        $('#Register').show();
    });
    
    $('#eventsli').on('click',function(){
        $('#home').hide();
        $('#events').show();
    });
});
      </script>
  <style>
      /*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : 06-May-2021, 4:02:43 pm
    Author     : dell
*/

#header{
    background-image: linear-gradient(to right,#ff3333,#ff3333);
    height: 90px;
     width:100%;
}
#header h1{
    color:#ffffff;
    text-shadow: 2px 2px 2px black;
    text-align: center;
    font-size: 60px;
    padding-top: 0;
}
body{
    background-color: #6699ff;
}
#section{
    background-color: white;
    height: 600px;
    width:40%;
    margin-top: 80px;
        
}
#section img{
    width: 30%;
  margin-left: 170px;
  margin-top: -80px;
}

#buttontoggle{
    margin-left: 170px;
    margin-top: 30px;
}
#Register{
    padding-top: 20px;
   padding-left: 40px;
}
#Register label{
    font-size: 30px;
}
#Register input[type=text]{
    width:100%;
    border-left-style:  hidden;
   border-right-style:  hidden;
   border-top-style:  hidden;
}

#Register input[type=email]{
    width:100%;
    border-left: none;
    border-right:none;
    border-top:none;
}
#Register input[type=password]{
    width:100%;
    border-left: none;
    border-right:none;
    border-top:none;
}
#Register input[type=submit]{
    width:100%;
   
    border-radius: 30px;
}
#login{
    padding-top: 20px;
   padding-left: 40px;
}
#login label{
    font-size: 30px;
}
#login input[type=text]{
    width:100%;
    border-left-style:  hidden;
   border-right-style:  hidden;
   border-top-style:  hidden;
}

#login input[type=text]{
    width:100%;
    border-left: none;
    border-right:none;
    border-top:none;
}
#login input[type=password]{
    width:100%;
    border-left: none;
    border-right:none;
    border-top:none;
}
#login input[type=submit]{
    width:100%;
    height: 50px;
    font-size: 30px;
   border:2px white solid;
   background-color:#00cccc;
    border-radius: 10px;
}

       
    

  </style>
    </head>
    <body>
        <div class="container-fluid" id="header">
           <h1>Student Portal</h1>
        </div>
        <div class="container-fluid" id="section">
            <img src="Login1.png" alt="login"><br>
            <div class="btn-group btn-group-lg" id="buttontoggle">
             <button type="button" class="btn btn-danger" id="Registerbutton">Register</button>
             <button type="button" class="btn btn-warning" id="Loginbutton">Login</button>
                </div>
            <div class="container-fluid" id="Register">
                <form action="connect.php" method="POST">
                    <label for="name" >Name *</label><br>
                    <input type="text" name="name" required="this is `  required">
                     <label for="Rno">Registration Number *</label><br>
                    <input type="text" name="Rno" required="this is required">
                     <label for="email">Email *</label><br>
                     
                    <input type="email" name="email">
                     <label for="password" required="this is required">Password *</label><br>
                     <input type="password" name="password" required="this is required"><br><br>
                    <input  type="submit" value="Register">
                </form>
            </div>
             <div class="container-fluid" id="login">
                 <form action="Check.php" method="post">
                     <label for="Rno">Registration Number *</label><br>
                    <input type="text" name="Rno">
                     <label for="password" required="this is required">Password *</label><br>
                     <input type="password" name="password" required="this is required"><br><br>
                    <input  type="submit" value="Login">
                 </form>
                 <h3>
                 
                 </h3>
            </div>
     
       
    </body>
</html>