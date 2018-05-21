<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO usg(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>



<script>  
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  
</script>  
</body>
<body>  
<form name="myform"  method="post" action="#" onsubmit="return validateemail();">
<table align="center" width="30%" border="0">
<tr>
<td><input type="uname" name="uname" placeholder="username" required/><br><br></td><br>
</tr><br><br>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /><br><br></td>
</tr><br><br>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /><br><br></td>
</tr>
<br><br>
<tr>

  
<input type="submit" value="register">  
</form> 

 
<td><a href="index.php">Sign In Here</a></td>
</tr>
</table>
</form>

      
  </div>





<div id="footer">
<p>All right reserved by Shimul </p>
</div>

</body>
</html>