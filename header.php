<?php
include 'config.php';
  if (file_exists("themes/".$themepath."/header.php")) 
	{
		include "themes/".$themepath."/header.php";
	}
	else
	{
	include 'themes/default/header.php';
	}
?>
