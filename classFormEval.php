<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['radio']))
	{
		foreach($_POST['radio'] as $_selected)
		{
			$row = "INSERT INTO ______ (   ) VALUES ('$_selected')"
		}
	}
}