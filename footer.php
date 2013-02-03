<?php
include 'config.php';
  if (file_exists("themes/".$themepath."/footer.php")) 
	{
		include "themes/".$themepath."/footer.php";
	}
	else
	{
	include 'themes/default/footer.php';
	}
?>
