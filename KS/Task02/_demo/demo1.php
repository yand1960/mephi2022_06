<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo PHP</title>
</head>
<body>
    <h1>Hello, I am PHP</h1>
    <?php
        $x = 2;
        $y = 2;
        $z = $x + $y;
        echo "<h3>Result: $z</h3>";
        $now = date("H:i:s");
    ?>
    <h3>Result: <?=$z?>
    <h2>Страница была открыта в <?=$now?></h2>
</body>
</html>