<?php
	$con=new mysqli("localhost","root","","student_db");
	if(isset($_POST['sub']))
	{
		$r = $_POST["reg"];
		$n = $_POST["nm"];
		$g = $_POST["gen"];
		$d = $_POST["dob"];
		$p = $_POST["phno"];
		$c = $_POST["Course"];
		$s = $_POST["sem"];
		$e = $_POST["eid"];
		$pass = $_POST["pid"];
		$sql = "INSERT INTO `register`(`reg_no`, `name`, `gender`, `dob`, `phone_no`, `course`, `sem`, `email_id`, `password`) VALUES ('$r','$n','$g','$d','$p','$c','$s','$e','$pass')";
		$res = $con->query($sql);

    if($res){
      ?>
      <script>
      alert('Registration Completed')
      </script>
      <?php
      
      header("location:/Student_Management/student_login.php");
    }
    else{
      echo "failed";
    }

	}
?>

<html>
<head><title>Registration</title>
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
<h1>STUDENT REGISTRATION FORM</h1>
<form method="post"  name="StudentRegistration"  >

<table cellpadding="5" width="30%" bgcolor="#e3e1bc" align="center" height="40%" cellspacing="3">
<tr></tr>
<tr></tr>
<tr>
<td colspan=2>
</td>
</tr>

<tr>
<td>Register No </td>
<td><input type="text" name="reg" ></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="nm" ></td>
</tr>
<tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gen" value="male" >Male
<input type="radio" name="gen" value="Female" >Female</td>
</tr>
<tr>
<td>DOB</td>
<td><input type="text" name="dob" placeholder="yyyy-mm-dd"></td>
</tr>
<tr>
<td>Phone No</td>
<td><input type="text" name="phno"></td>
</tr>
<tr>
<td>Course</td>
<td><select name="Course">
<option value="-1" selected>select..</option>
<option value="B.Tech">B.TECH</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BCA">BCA</option>
</select></td>
</tr>
<tr>
<td>Semester</td>
<td><input type="text" name="sem"></td>
</tr>
</tr>
<tr>
<td>Email Id</td>
<td><input type="text" name="eid"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pid"></td>
</tr>
<tr>
<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" value="Submit Form" name="sub" /></td>
</tr>
</table>
</form>
</body>
</html>