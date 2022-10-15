<?php

include("dal.php");

$id = $_REQUEST["id"];

$info = getPhotoInfo($id);

echo(json_encode($info, JSON_UNESCAPED_UNICODE));