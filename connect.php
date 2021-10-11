<?php
$host="localhost";
$username="root";
$password="";
$db="StudentPortal";
$name=$_POST["name"];
$password1=$_POST["password"];
$email=$_POST["email"];
$regno=$_POST["Rno"];
$conn=new mysqli($host,$username,$password,$db);
if($conn->connect_error){
    echo $conn->connect_error;
}else{
    
}
$insert="INSERT INTO register(Name,Regno,Emailid,Password)VALUES('$name','$regno','$email','$password1')";
if($conn->query($insert) ===TRUE){
    header("location:home.php");
}else{
    echo "contact: 12339";
}


?>

