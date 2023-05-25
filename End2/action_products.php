<?php
include("config.php");
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$query = "SELECT * FROM `products` where `id` = '$id'";
$result = mysqli_query($server,$query);
$row = mysqli_fetch_array($result);
if($row)
{
?>
<form action="buy.php" method="post">
   <input type="text" readonly value="<?php echo ($row['id']); ?>" name="id" required><br>
   <input type="text" readonly value="<?php echo ($row['name']); ?>" name="name" required><br>
   <input type="text"  placeholder="تعداد" name="count" required><br>
   <input type="text" readonly value="<?php echo ($row['price']); ?>" name="price" required><br>
   <input type="text"  placeholder="نام و نام خانوادگی" name="full_name" required><br>
   <input type="text"  placeholder="شماره تلفن" name="phone" required><br>
   <input type="text"  placeholder="آدرس" name="address" required><br>
   <input type="submit">
</form>
<?php
}
?>