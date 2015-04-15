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
	</div>
<?php
require_once('templates/bottom.php');
?>