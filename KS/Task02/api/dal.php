<?php

function getFiles() {
    $conn = mysqli_connect("localhost:3306", "root", "", "album");
    $sql = "SELECT 
                PhotoID, File
            FROM
                photos";

    $result = mysqli_query($conn, $sql);
    $data= mysqli_fetch_all($result);
    mysqli_close($conn);

    $photos = [];
    foreach($data as $photo) {
        //$photos[] = $photo[0];
        $photo_name_id = [
            "photoID" => $photo[0],
            "fileName" => $photo[1]
        ];
        array_push($photos, $photo_name_id);
    }

    return $photos;
}

function getPhotoInfo($photoID) {
    
    $conn = mysqli_connect("localhost:3306", "root", "", "album");
    $sql = "SELECT 
                PhotoName, SnapDate, Keywords
            FROM
                photos
            WHERE
                PhotoID = $photoID
    ";

    $result = mysqli_query($conn, $sql);
    $data= mysqli_fetch_all($result);
    mysqli_close($conn);
    $info = [
        "name" => $data[0][0],
        "data" => $data[0][1],
        "keywords" => $data[0][2],
    ];

    return $info;
}

getFiles();