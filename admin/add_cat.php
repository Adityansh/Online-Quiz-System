<?php
extract($_POST);
include "../class/users.php";
$cate=new users;
$cat_name=htmlentities($cat_name);

$query="insert into category values ('','$cat_name')";
if($cate->add_cat($query))
{
	$cate->url("index.php?msg=run");
	//echo "data insert successfully";
}

?>
  