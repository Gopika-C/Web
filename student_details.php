<?php
session_start();
$user=$_SESSION['l_id'];
$con = new mysqli("localhost","root","","student_db");
$sql="SELECT * FROM `register` WHERE s_id=$user";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head><title>Student Details</title>
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
</head>
<body>
<form > 
<br><br>
<h1 align="center" >Student Profile</h1>
<br>
 <table align="center" bgcolor="#a0b1ba" width="40%" cellpadding="5" cellspacing="4">
<?php 
           while ($row=mysqli_fetch_assoc($res)) {
            ?>
             <tr>
            <td>Register No:</td>
            <td ><input type="text" value="<?php echo $row['reg_no']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Name</td>
            <td><input type="text" value="<?php echo $row['name']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td height="40"><input type="text" value="<?php echo $row['gender']; ?>" readonly></td>
             </tr>
            <tr>
            <td>DOB</td>
            <td height="40"><input type="text" value="<?php echo $row['dob']; ?>" readonly></td>
             </tr>
            <tr>
            <td>Phone</td>
            <td><input type="text" value="<?php echo $row['phone_no']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Course</td>
            <td><input type="text" value="<?php echo $row['course']; ?>" readonly></td>
             </tr>
            <tr>
             <td>Sem</td>
            <td><input type="text" value="<?php echo $row['sem']; ?>" readonly></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" value="<?php echo $row['email_id']; ?>" readonly></td>
            </tr>

          <?php
          }
          ?>
          <tr>
               <center><a href="student_home.php">Back To Home</a><br><br></td></center>
          </tr>
</table>
</form>
</body>
</html>