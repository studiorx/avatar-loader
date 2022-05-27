<?php

	$text1 = $_POST["data"];

	if($text1 != "")
	{
		echo("Message received");
		echo("data: " . $text1);

		$file = fopen("AvatarCodes.json", "w" );
		fwrite($file, $text1);
		fclose($file);
	}
	else
	{
		echo("Message failed");
	}
?>