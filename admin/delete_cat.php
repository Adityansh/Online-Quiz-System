<?php
extract($_POST);
include "../class/users.php";
$cate=new users;
$cat_name=htmlentities($cat_name);

$query="delete from category where cat_name='$cat_name'";
if($cate->delete_cat($query))
{
	$cate->url("index.php?msg=run");
	//echo "data insert successfully";
}

?>