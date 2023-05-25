<?php
session_start();
$server = mysqli_connect("localhost","root","","end2");
if(mysqli_connect_errno())
{
    exit("Error : ".mysqli_connect_error());
}
?>