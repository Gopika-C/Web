<?php
session_start();
$con = new mysqli("localhost","root","","student_db");
if(isset($_POST['sub']))
{
  if (!$con) 
   {
      echo "Connection failed";
   } 

else
  {  
$e = $_POST['eid'];
$pass = $_POST['pid'];
     $sql="SELECT * FROM `register` WHERE email_id='$e' and password='$pass'";

     $res = $con->query($sql); 

     if(mysqli_num_rows($res)>0)
     {
        $rows = mysqli_fetch_array($res); 
        $id=$rows[0];
        $_SESSION['l_id']=$id;
        header("location:/Student_Management/student_details.php");
      }

    else
    {
      ?>
      <script>
      alert('Invalid user')
      </script>
      <?php
      
      header("refresh:1; url=student_login.php");
    }

  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {
  background-image: url("https://i1.wp.com/www.digime.fi/wp-content/uploads/2009/09/photo-1453928582365-b6ad33cbcf64.jpeg?fit=1800%2C1197&ssl=1");
background-size: 100%;
background-repeat: no-repeat;
}
table{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
h1{
color:white;
text-align:center;
}
</style>
</head>
<body>
<form method="POST" > 
<h1 align="center">Welcome To Student Login Page</h1>
 <br><br>
 <table align="center" bgcolor="#cbcab9" cellpadding="6" cellspacing="5" width="30%" height="30%">
 <tr>
       <td>Username</td>
        <td><input type="email" required placeholder="Email" name="eid"></td>
</tr>
       <tr>
        <td>Password</td>
        <td ><input type="Password" required placeholder="Password" name="pid"></td>
</tr>
<tr>
<td></td>
<td >
 <input type="submit" value=" LOGIN" name="sub">
</td>
</tr>
 <tr>
<td></td>
<td >
<a href="student_home.php">Back To Home</a><br><br>
</td>
</tr>
 </table>
 </form>
</body>
</html>