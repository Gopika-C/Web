<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "Username is " . $_SESSION["username"] . ".<br>";
echo "Email is " . $_SESSION["email"] . ".";
?>
</body>
</html>
