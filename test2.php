<?php
$st = microtime(true);
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

$var = "<code>LED1: ".shell_exec('gpio read 11')."<br>";
$var .= "LED2: ".shell_exec('gpio read 6')."<br>";
$var .= "LED3: ".shell_exec('gpio read 5')."<br>";
$var .= "LED4: ".shell_exec('gpio read 1')."<br>";
$var .= "LED5: ".shell_exec('gpio read 15')."<br></code>";

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LED-Steuerung</title>
	<script src="files/jquery-1.9.1.min.js"></script>
	<script src="files/mousetrap.min.js"></script>
	<style>
	code {font-size: 14px;}
	/* button style from "http://tutorialzine.com/" */
	.button{display:inline-block;font-size:12px;text-decoration:none!important;font-family:Helvetica,Arial,sans serif;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;box-shadow:inset 0 0 2px #fff;-o-box-shadow:inset 0 0 2px #fff;-webkit-box-shadow:inset 0 0 2px #fff;-moz-box-shadow:inset 0 0 2px #fff}.button:active{box-shadow:inset 0 0 3px #999;-o-box-shadow:inset 0 0 3px #999;-webkit-box-shadow:inset 0 0 3px #999;-moz-box-shadow:inset 0 0 3px #999}.grey{color:#444;border:1px solid #d0d0d0;background-image:-moz-linear-gradient(#ededed,#e1e1e1);background-image:-webkit-gradient(linear,0% 0,0% 100%,from(#e1e1e1),to(#ededed));background-image:-webkit-linear-gradient(#ededed,#e1e1e1);background-image:-o-linear-gradient(#ededed,#e1e1e1);text-shadow:1px 1px 1px #fff;background-color:#e1e1e1}.grey:hover{border:1px solid #b0b0b0;background-image:-moz-linear-gradient(#e1e1e1,#ededed);background-image:-webkit-gradient(linear,0% 0,0% 100%,from(#ededed),to(#e1e1e1));background-image:-webkit-linear-gradient(#e1e1e1,#ededed);background-image:-o-linear-gradient(#e1e1e1,#ededed);background-color:#ededed}.grey:active{border:1px solid #666}
	</style>
	<script>
	Mousetrap.bind("1", function(){$('#l1').trigger('click');});
	Mousetrap.bind("2", function(){$('#l2').trigger('click');});
	Mousetrap.bind("3", function(){$('#l3').trigger('click');});
	Mousetrap.bind("4", function(){$('#l4').trigger('click');});
	Mousetrap.bind("5", function(){$('#l5').trigger('click');});
	</script>
</head>
<body>
	<?=$var?>
	<br>
	<form action="test2.php" method="post">
		<input type="submit" name="l1" id="l1" class="button grey" value="LED1">
		<input type="submit" name="l2" id="l2" class="button grey" value="LED2">
		<input type="submit" name="l3" id="l3" class="button grey" value="LED3">
		<input type="submit" name="l4" id="l4" class="button grey" value="LED4">
		<input type="submit" name="l5" id="l5" class="button grey" value="LED5">
	</form>
	<br>
	<?php
	$et = microtime(true);
	echo "<i><small>Skriptladezeit: ".round($et - $st,4)." Sekunden</small></i>";
	?>
</body>
</html>



