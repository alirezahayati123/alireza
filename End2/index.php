<?php
include("config.php");
if(isset($_SESSION['state_login']) && $_SESSION['state_login'] == true)
{
    echo ("<a href='logout.php'>logout</a><br><br>");
}
if(isset($_SESSION['state_login']) && $_SESSION['state_login'] == true  && isset($_SESSION['type']) && $_SESSION['type'] == 'admin')
{
    echo ("<a href='admin_products.php'>manage products</a><br><br>");
}
?>
<a href="login.php">login</a><br><br>
<a href="register.php">register</a><b><br>
<a href="products.php">products</a><br><br>