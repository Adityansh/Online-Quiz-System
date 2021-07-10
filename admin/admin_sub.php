<?php
include("../class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
	$signin->url("index.php");
}
else
{
	$signin->url("index.php?run=failed");
}
?>