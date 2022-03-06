<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'admin' and $pw == 'admin')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
else
{
    echo "Invalid userid and password";
}
?>
 
</body>
</html>