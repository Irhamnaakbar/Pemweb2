<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['irham', 'irhamna', 'akbar', 'iam'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>