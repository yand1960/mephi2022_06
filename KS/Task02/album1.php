<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Альбом</title>
    <style>
        img#large {
            width: 400px;
        }

        #thumbs img {
            border: solid white thick;
        }

        #thumbs img:hover {
            border: solid blue thick;
            cursor: pointer;
        }
        
        #thumbs img.selected {
            border: solid red thick;
        }
    </style>
    
    <script src="scripts/jquery-3.6.1.js"></script>

    <script>
        function showLarge(element) {
            var large_photo = $(element).attr("src");
            var splitted = large_photo.split(".");
            console.log(splitted); // Код для отладки
            large_photo = splitted[0] + "-large." + splitted[1];
            console.log(large_photo); // Код для отладки
            $("#large").attr("src", large_photo);
            $("#thumbs img").removeClass("selected");
            $(element).addClass("selected");
        }

    </script>
</head>
<body>
    <h1>Фотоальбом (БД)</h1>
    <div id="thumbs">
    <?php
        include("api/dal.php");
        $files = getFiles();
        foreach($files as $f) {
            echo "<img src='images/$f' onclick='showLarge(this);'/>";
        }
    ?>
    </div>
    <img src="" id="large" />
</body>
</html>