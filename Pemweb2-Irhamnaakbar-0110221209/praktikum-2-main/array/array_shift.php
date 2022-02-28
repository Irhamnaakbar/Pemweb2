<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['irham', 'irhamna', 'akbar', 'iam'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>