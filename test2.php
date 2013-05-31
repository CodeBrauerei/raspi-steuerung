<?php
$st = microtime(true);
$cv = array();
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
} else if (isset($_POST['la'])) {
    if (preg_match('/0/', shell_exec('gpio read 11'))) {
        shell_exec('gpio write 15 1 && gpio write 1 1 && gpio write 5 1 && gpio write 6 1 && gpio write 11 1');
    } else {
        shell_exec('gpio write 15 0 && gpio write 1 0 && gpio write 5 0 && gpio write 6 0 && gpio write 11 0');
    }
}
$cv[1] = (preg_match('/1/', shell_exec('gpio read 11'))) ? 'blue' : 'grey';
$cv[2] = (preg_match('/1/', shell_exec('gpio read 6'))) ? 'blue' : 'grey';
$cv[3] = (preg_match('/1/', shell_exec('gpio read 5'))) ? 'blue' : 'grey';
$cv[4] = (preg_match('/1/', shell_exec('gpio read 1'))) ? 'blue' : 'grey';
$cv[5] = (preg_match('/1/', shell_exec('gpio read 15'))) ? 'blue' : 'grey';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>LED-Steuerung</title>
        <script src="files/jquery-1.9.1.min.js"></script>
        <script src="files/mousetrap.min.js"></script>
        <link rel="stylesheet" href="files/test2.css">
        <script>
            Mousetrap.bind("1", function(){$('#l1').trigger('click');});
            Mousetrap.bind("2", function(){$('#l2').trigger('click');});
            Mousetrap.bind("3", function(){$('#l3').trigger('click');});
            Mousetrap.bind("4", function(){$('#l4').trigger('click');});
            Mousetrap.bind("5", function(){$('#l5').trigger('click');});
            Mousetrap.bind("0", function(){$('#la').trigger('click');});
        </script>
    </head>
    <body>
        <h1></h1>
        <form action="test2.php" method="post">
            <input type="submit" name="l1" id="l1" class="button <?= $cv[1] ?>" value="LED1" title="press on keyboard '1'">
            <input type="submit" name="l2" id="l2" class="button <?= $cv[2] ?>" value="LED2" title="press on keyboard '2'">
            <input type="submit" name="l3" id="l3" class="button <?= $cv[3] ?>" value="LED3" title="press on keyboard '3'">
            <input type="submit" name="l4" id="l4" class="button <?= $cv[4] ?>" value="LED4" title="press on keyboard '4'">
            <input type="submit" name="l5" id="l5" class="button <?= $cv[5] ?>" value="LED5" title="press on keyboard '5'">
            <input type="submit" name="la" id="la" class="button grey" value="ALL LEDS" title="press on keyboard '0'">
        </form>
        <br>
<?php
$et = microtime(true);
echo "<small>Ladezeit: </small><code>" . round($et - $st, 4) . "</code><small> Sekunden</small>";
?>
    </body>
</html>