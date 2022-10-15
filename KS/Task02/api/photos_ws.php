<?php

include("dal.php");
$photos = getFiles();

echo(json_encode($photos));