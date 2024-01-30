<?php
$username =$_POST['username'];
$password =$_POST['password'];

$conn =new mysqli('localhost','root','','bloodbank');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into admin(username,password)values(?,?)");
    $stmat->bind_param("ss",$username,$password);
    $stmat->execute();
    echo "registration successfull";
    $stmat->close();
    $conn->close();
}
?>