<?php
include("config.php");
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$query = "SELECT * FROM `users` where `username` = '$username' and `password` = '$password'";
$result = mysqli_query($server,$query);
$row = mysqli_fetch_array($result);
if($row)
{
    $_SESSION['state_login'] = true;
    if($row['type'] == 1)
    {
        $_SESSION['type'] = 'admin';
    }
    else
    {
        $_SESSION['type'] = 'public';
    }
    echo "Login is Successfuly";
}
else
{
    exit("Username or password is failure");
}
mysqli_close($server);
?>