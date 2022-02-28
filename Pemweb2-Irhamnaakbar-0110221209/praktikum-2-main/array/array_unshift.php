<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['irham', 'irhamna', 'akbar', 'iam'];
	array_unshift($name, 'yaammm', 'bar');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>