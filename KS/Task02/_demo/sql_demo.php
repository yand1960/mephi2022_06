<?php
//процедурный, а не объектный язык

$conn = mysqli_connect("localhost:3306", "root", "", "album");
$sql = "SELECT 
            File
        FROM
            photos";

$result = mysqli_query($conn, $sql); // возврат типа данных cursor (поток данных)
//var_dump($result);
$photos = mysqli_fetch_all($result);  // извлечь все значения из типа даныых cursor
//var_dump($photos);
mysqli_close($conn);

foreach($photos as $photo) {
    echo($photo[0]."<br />");
}