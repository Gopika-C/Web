<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "gopika";
$_SESSION["email"] = "gopikachingan@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
