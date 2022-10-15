<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_REQUEST["MyNumber"])) {
            $x = $_REQUEST["MyNumber"];
            $result = 2 * $x;
        }
        else
            $result = "";

    ?>
    <textarea></textarea>

    <h1>Введите ваше число, нажмите на кнопку и мы его удвоим</h1>
    <form>
        <input type="text" name="MyNumber" value="<?=$result?>" />
        <button>Поехали!</button>
    </form>
</body>
</html>