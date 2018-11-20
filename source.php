<?php
require("VideoStream.php");
$filePath = $_GET[video];
$stream = new VideoStream($filePath);
$stream->start();
?>