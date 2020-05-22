<?php

include_once "base.php";

$id = $_GET['id'];

$file = find('file_info',$id);

unlink($file['path']);

del("file_info",$id);

to("manage.php");

?>