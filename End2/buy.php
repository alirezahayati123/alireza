<?php
include("config.php");
if(isset($_POST['id']) && !empty($_POST['id']) &&
isset($_POST['name']) && !empty($_POST['name']) &&
isset($_POST['count']) && !empty($_POST['count']) &&
isset($_POST['price']) && !empty($_POST['price']) &&
isset($_POST['full_name']) && !empty($_POST['full_name']) &&
isset($_POST['phone']) && !empty($_POST['phone']) &&
isset($_POST['address']) && !empty($_POST['address']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
}
else{
    exit("برخی فیلدها مقداردهی نشده است");
}
$query = "INSERT INTO `buy`(`id`,`name`,`count`,`price`,`full_name`,`phone`,`address`) values ('$id','$name','$count','$price','$full_name','$phone','$address')";
$result = mysqli_query($server,$query);
if($result)
{
    echo "سفارش با موفقیت ثبت شد . محصول به زودی برای شما ارسال میشود";
}
else
{
    echo "Not not not not";
}
?>