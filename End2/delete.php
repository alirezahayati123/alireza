<?php
include("config.php");
if(!isset($_SESSION['type']) || $_SESSION['type'] != 'admin')
{
    header("location : index.php");
}
if(isset($_GET['id']) && isset($_GET['image']))
{
    $id = $_GET['id'];
    $image = $_GET['image'];
}
$file = "images/".$image;
$query = "DELETE FROM `products` where `id` = '$id'";
$result = mysqli_query($server,$query);
if($result)
{
    echo "محصول با موفقیت از دیتابیس پاک شد";
}
if(!unlink($file))
{
    echo "تصویر با موفقیت از سرور پاک شد";
}
mysqli_close($server);
?>
