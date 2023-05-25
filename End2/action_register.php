<?php
include("config.php");
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$query = "INSERT INTO `users`(`username`,`password`) values ('$username','$password')";
$result = mysqli_query($server,$query);
if($result)
{
    echo "Register is successfuly";
}
else
{
    exit("register is not successfuly");
}
?>