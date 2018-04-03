<!DOCTYPE html5>
<html>
<head>
 <title>
     Bank Administration login
      </title> 
      <meta charset="utf-8">
      <link rel="stylesheet" href="login_Style.css">
      
  </head>
<body>

  <div class="container-fluid" style="margin-top:100px;margin-left:100px">
      <h1 style="color:blue;text-align:center;""> <strong> ONLINE BANK LOAN MANAGEMENT SYETEM<strong> </h1>
  </div>
<div id="loginbox"> 
  <img src="admin.png" id="user"> 
  <h2> ADMIN LOGIN </h2> 
  
  
  <form action="login.html" method="post"> 
        <p> Email </p>
        <input type="email" name=" " placeholder="Enter Email">
        <p> Password </p>
        <input type-"password" name=" " placeholder="..........">
        <input type="submit" name="" value="Sign In">
        
        <p>  <a href="#" > Forget Password </a> </p>
        
        
  
     
  </form>
</div>
 
 <a href="#" onclick="window.location.reload(true);">   
</body>


</html>

<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('mydb',$con) or die (mysql_error());
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  if($name=='')
  {
    echo" <script >alert('Enter your email address')</script>>";
  }
  if(password="")
  {
    echo" <script> alert('Enter your password')</script>;
  }
  else
  {
    $query="insert into registration(name,password) values
    ('$email','$password') ";
  }

  if(mysql_query($query))
  {
    echo "<script>alert('You are successfully registered....!!')</script>";
  }
}

?>
