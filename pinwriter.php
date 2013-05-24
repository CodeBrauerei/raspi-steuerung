<?php

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>PinWriter v0.1</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<style>
	body {font-family: 'Ubuntu', sans-serif;}
	img {float:right; box-shadow: 0 8px 6px -6px black; padding: 5px; border: 2px solid #222;}
	table {margin: 0 20px;float:left;}
	table, tr,td {border: 1px solid #222; border-collapse: collapse;}
	td {padding: 2px}
	.clearfix:before,.clearfix:after{content:" ";display:table;}
	.clearfix:after{clear:both;}
	.clearfix{zoom:1;}	 
</style>
<body>
	<div style="text-align:center; padding-bottom:20px;">
		<h1 style="display:inline;">GPIO Steuerung für Raspberry Pi</h1>
		<span>(für Rev 2.0)</span>
	</div>
	<div class="clearfix"></div>
	<img src="files/pins.png" title="Quelle: http://www.mikrocontroller.net/articles/Raspberry_Pi#Die_GPIO-Schnittstelle">
	<table>
		<tr>
			<td style="width: 75px;">GPIO 2</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 3</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 4</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 17</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 27</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 22</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 10</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 9</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 11</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width: 75px;">GPIO 14</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 15</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 18</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 23</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 24</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 25</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 8</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
		<tr>
			<td style="width: 75px;">GPIO 7</td>
			<td><input type="submit" value="0"><input type="submit" value="1"></td>
			<td><span class="status"></span></td>
		</tr>
	</table>
</body>
</html>