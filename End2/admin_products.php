<?php
include("config.php");
if(!isset($_SESSION['type']) || $_SESSION['type'] != 'admin')
{
    header("location : index.php");
}
?>
<form action="action_admin_products.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="نام محصول" required name="pro_name"><br>
    <input type="text" placeholder="قیمت محصول" required name="pro_price"><br>
    <input type="text" placeholder="تعداد" required name="pro_count"><br>
    <input type="file" name="pro_file"><br>
    <input type="submit">
</form>
<?php
$query = "SELECT * from `products`";
$result = mysqli_query($server,$query);
while($row = mysqli_fetch_array($result))
{
?>
__________________________________________________________________________________
<br><a href="delete.php?id=<?php echo ($row['id']); ?>&image=<?php echo ($row['image']); ?>">
<p>نام : <?php echo ($row['name']);?></p><br>
<p>تعداد : <?php echo ($row['count']); ?></p><br>
<p>قیمت : <?php echo ($row['price']); ?></p>
<img src="images/<?php echo ($row['image']);?>"><br>
</a>

<?php
}
?>