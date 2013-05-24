<?php
// entsprechenden GPIO-Pins auf Ausgabe stellen
shell_exec('gpio mode 1 out && gpio mode 5 out && gpio mode 6 out && gpio mode 11 out && gpio mode 15 out');

if (isset($_POST['l1'])) {
	if (preg_match('/0/', shell_exec('gpio read 11'))) {
		shell_exec('gpio write 11 1');
	} else {
		shell_exec('gpio write 11 0');
	}
} else if (isset($_POST['l2'])) {
	if (preg_match('/0/', shell_exec('gpio read 6'))) {
		shell_exec('gpio write 6 1');
	} else {
		shell_exec('gpio write 6 0');
	}
} else if (isset($_POST['l3'])) {
	if (preg_match('/0/', shell_exec('gpio read 5'))) {
		shell_exec('gpio write 5 1');
	} else {
		shell_exec('gpio write 5 0');
	}
} else if (isset($_POST['l4'])) {
	if (preg_match('/0/', shell_exec('gpio read 1'))) {
		shell_exec('gpio write 1 1');
	} else {
		shell_exec('gpio write 1 0');
	}
} else if (isset($_POST['l5'])) {
	if (preg_match('/0/', shell_exec('gpio read 15'))) {
		shell_exec('gpio write 15 1');
	} else {
		shell_exec('gpio write 15 0');
	}
}

echo "LED1: ".shell_exec('gpio read 11')."<br>";
echo "LED2: ".shell_exec('gpio read 6')."<br>";
echo "LED3: ".shell_exec('gpio read 5')."<br>";
echo "LED4: ".shell_exec('gpio read 1')."<br>";
echo "LED5: ".shell_exec('gpio read 15')."<br>";

?>
<form action="test2.php" method="post">
	<input type="submit" name="l1" value="LED1">
	<input type="submit" name="l2" value="LED2">
	<input type="submit" name="l3" value="LED3">
	<input type="submit" name="l4" value="LED4">
	<input type="submit" name="l5" value="LED5">
</form>
