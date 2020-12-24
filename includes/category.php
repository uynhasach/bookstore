<?php
	if(isset($_GET["show"]))
	{
		$row=$_GET["show"];
	} 
	else{ $row = ""; }
	if($row == "show_book1")
	{
		include ("includes/show_book1.php");
	}
	else if($row == "show_book2")
	{
		include ("includes/show_book2.php");
	}
	else if($row == "show_book3")
	{
		include ("includes/show_book3.php");
	}
	else if($row == "show_book4")
	{
		include ("includes/show_book4.php");
	}
	else if($row == "show_book5")
	{
		include ("includes/show_book5.php");
	}
	else if($row == "show_detail")
	{
		include ("includes/show_detail.php");
	}
?>