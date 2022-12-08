<?php 
function getIndex($index, $default='')
{
	return isset($_GET[$index])?$_GET[$index]:$default;
}
function postIndex($index, $default='')
{
	return isset($_POST[$index])?$_POST[$index]:$default;
}

?>