<?php
extract($_POST);
include "../class/users.php";
$ans=new users;
$ans_d=htmlentities($ans_d);

$query="delete from questions where cat_id='$cat' and question='$ans_d' ";
if($ans->delete_cat($query))
{
	$ans->url("index.php?msg=run");
	//echo "data insert successfully";
}

?>