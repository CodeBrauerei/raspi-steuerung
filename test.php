<?php
$info = "";
if (isset($_POST['aktion'])) {
  for ($i=1; $i < $_POST['counts']; $i++) { 
		shell_exec('gpio write 15 1');
		usleep($_POST['rate']);
		shell_exec('gpio write 15 0');
		usleep($_POST['rate']);
	}
	$info = "<b>Info</b>: <i>Aktion wurde durchgef&uuml;hrt</i>";
} else if (isset($_POST['an'])) {
	shell_exec('gpio write 15 1');
	$info = "<b>Info</b>: <i>Aktion 'An' wurde durchgef&uuml;hrt</i>";
} else if (isset($_POST['aus'])) {
	shell_exec('gpio write 15 0');
	$info = "<b>Info</b>: <i>Aktion 'Aus' wurde durchgef&uuml;hrt</i>";
}

$getbit = shell_exec('gpio read 15');

if (preg_match('/1/', $getbit)) {
	$status = "LED ist an";
} else if (preg_match('/0/', $getbit)) {
	$status = "LED ist aus";
} else {
	$status = "Konnte nicht gelesen werden.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LED Ansteuern</title>
	<style>
		body {font-family: 'Open Sans', sans-serif;}
		.clearfix:before,.clearfix:after{content:" ";display:table;}
		.clearfix:after{clear:both;}
		.clearfix{zoom:1;}
		fieldset {border: 2px solid #222;}
		input[type="submit"] {border: 2px solid #4FDA2C; background: #222; color: #fff; padding: 3px 5px;}
		input[type="submit"]:hover {background: #ccc; color: #222;}
		input[type="number"] {border: 1px solid #222;}

	</style>
</head>
<body>
	<h1>LED Ansteuerung via GPIO</h1>
	<p>Die LED sollte am GPIO Port 14 angeschlossen sein. Befehle werden mit WiringPi ausgeführt.</p>
	<form action="test.php" method="POST">
		<fieldset style="display:inline;width: 200px; height:200px; float:left;">
			<legend>Aktionen</legend>
			<h3><?=$status?></h3>
			<input type="submit" name="an" value="LED einschalten"><br>
			<input type="submit" name="aus" value="LED ausschalten">
		</fieldset>
	</form>
	<form action="test.php" method="POST">
		<fieldset style="width: 500px; height:200px; float:left;">
			<legend>LED Blinken</legend>
			Wie oft soll die LED blinken?<br>
			<input type="number" name="counts" min="1" max="50" step="1" required><br><br>
			Mit wieviel Mikrosekunden Unterbrechung <i>(250000 = &frac14; Sekunde)</i>?
			<input type="number" name="rate" min="50000" max="2500000" step="50000" required><br>
			<input type="submit" name="aktion" value="Durchführen">
		</fieldset>
	</form>
	<div class="clearfix"></div>
	<br>
	<?=$info?>	
</body>
</html>
