<?php
include("config.php");
$query = "SELECT * FROM `products`";
$result = mysqli_query($server,$query);
while($row = mysqli_fetch_array($result))
{
?>
<a href="action_products.php?id=<?php echo ($row['id']); ?>"
<p>نام : <?php echo ($row['name']);?></p><br>
<p>تعداد : <?php echo ($row['count']); ?></p><br>
<p>قیمت : <?php echo ($row['price']); ?></p>
<img src="images/<?php echo ($row['image']);?>"><br>
</a>
__________________________________________________________________________________
<br>
<?php
}
?>