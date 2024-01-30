<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>SNS Blood Bank</title>
</head>
<center>
<body style="background:black">
<form action="connect.php"method="post">
<h1 style="color:red">SNS BLOOD BANK</h1>
<label style="color:red" width=200px>username</label>
<input type="text" name="username" required>
<br>
<br>
<label style="color:red">password</label>
<input type="password" name="password" required>
<br>
<br>
<a href="bd.html"> 
<input type="submit" value="submit" style="color:red">
</center>
</form>
<?php
if(isset($_POST['sub']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q=$db->prepare("SELECT * FROM admin WHERE usename='$username' && password='$password'");
    $q->execute();
    $res=$q->fetchAll(PDO::FETCH_OBJ);
    if($res)
    {

        header("Location:admin-home.php");
    }else{
        echo"wrong user";
    }
}
?>
</body>
</html>
