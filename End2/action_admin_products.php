<?php
include("config.php");
if(isset($_POST['pro_name']) && !empty($_POST['pro_name']) && isset($_POST['pro_price']) && 
!empty($_POST['pro_price']) && isset($_POST['pro_count']) && !empty($_POST['pro_count']))
{
    $name = $_POST['pro_name'];
    $price = $_POST['pro_price'];
    $count = $_POST['pro_count'];
    $file = $_FILES['pro_file']['name'];
}
else
{
    exit("برخی فیلدها مقداردهی نشده است");
}
$OK = true;
$target_file = "images/".$_FILES['pro_file']['name'];
$imgtype = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES['pro_file']['tmp_name']);
if($check == false)
{
    $OK = false;
}
if(file_exists($target_file))
{
    echo "فایل وجود دارد"."<br>";
}
$imgtype = strtolower($imgtype);
if($imgtype != "png" && $imgtype != "jpg" && $imgtype != "jpeg")
{
    $OK = false;
}
if(move_uploaded_file($_FILES['pro_file']['tmp_name'],$target_file))
{
    echo "فایل با موفقیت رو سرور آپلود شده است"."<br>";
}
else{
    $OK = false;
}
if($OK == true)
{
    $query = "INSERT INTO `products`(`name`,`price`,`image`,`count`) values('$name','$price','$file','$count')";
    $result = mysqli_query($server,$query);
    if($result)
    {
        echo "محصول با موفقیت اضافه شد";
    }
    else
    {
        echo "محصول اضافه نشد";
    }
}
mysqli_close($server);
?>