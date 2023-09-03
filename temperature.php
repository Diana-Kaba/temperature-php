<?php
$x = rand(-30, 50);
$x = (int) $x;

$start = <<<EOD
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Температура</title>
</head>
<body>
<h2>3.1 Температура</h2>
EOD;
echo $start;

if ($x < 0) {
    echo "\n <p style=\"color: blue;\">$x °C - мороз!</p> \n";
} elseif ($x === 0) {
    echo "\n <p style=\"color: lightgreen;\">$x °C - не мороз и не тепло…</p> \n";
} elseif ($x > 0) {
    echo "\n <p style=\"color: gold;\">$x °C - тепло!</p> \n";
}

$end = <<<EOD
</body>
</html>
EOD;
echo $end;
