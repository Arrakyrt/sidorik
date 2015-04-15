<?php
require_once('templates/top.php');

if($_GET['url']){
    $file = $_GET['url'];
} else {
    $file='index';
}

$query = "SELECT * FROM $tbl_maintext WHERE url = '$file'";

$cut   = mysql_query($query);
if(!$cut) {
    exit($query);
}

$tbl_text = mysql_fetch_array($cut);

?>
	<div class="col-md-8">
		<h2><?php echo $tbl_text[name]?></h2>
        <?php 
        echo $tbl_text[body]; 
        ?>


<?php
$query = "SELECT * FROM $tbl_catalog WHERE id = ".$_GET['id'];
$cat   = mysql_query($query);
if(!$cut) {
    exit($query);
}
$category = mysql_fetch_array($cut);
echo "<h2>".$category['name']."</h2>";

$query = "SELECT * FROM $tbl_product WHERE cat_id = ".$_GET['id'];
$prod =  mysql_query($query);
if(!$prod) {
    exit($query);
}
while($product = mysql_fetch_array($prod)) {
	if($product['picturesmall']) {
		$picture = "<a href = '#' data = ".$product['id']."class='pict'>.
		<img src = 'media/images/".$product['picturesmall']."'/></a>";
	} else {
		$pict = "-";
	}
	echo "<div class='gallery'>";
	echo $product['name'];
	echo $picture;
	echo $product['body'];
	echo $product['price'];
	echo "</div>";
}
?>
	</div>
<?php
require_once('templates/bottom.php');
?>