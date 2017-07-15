<html>
<head>
	<title>Admin home page</title>
</head>

<body>
	<form name="view" value="" action="" method="post">
		<input name="button1" type="button" value="child assessment">
		<input name="button2" type="button" value="classroom assessment">
	</form>
	<a href="ClassRoomAssesment.html">CLick here to enter the assessment</a>
	<?php
	if(isset($_REQUEST["button1"]))
		header("location : childassess.html");
	if(isset($_REQUEST["button2"]))
		header("location: google.co.in");
	?>
</html>