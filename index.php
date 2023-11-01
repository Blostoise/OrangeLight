<!DOCTYPE html>
<html lang = "en">
<!-- You know what goes here!-->

<head>
	<meta charset ="utf-8">
	<title>Simple PHP Document</title>
</head>

<body>
<!--php script-->
<?php
//Display greeting message
echo 'Hello World' . "<br><br>";

//Examples of using an Escape Character \
echo "He asked, \"What time does class begin?\""."<br><br>";

echo 'He asked, "What time does class begin?"'."<br><br>";
?>

<!-- Embed PHP codes within HTML to create well formed dynamic web pages-->
<h1><?php echo "I Love This Game!"; ?></h1>

<!-- The code above could also be written as-->

<?php
	echo "<h1>I Love This Game!</h1>";
?>
	
</body></html>