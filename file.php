<?php

require_once("bootstrap.ini.php");


$files = $_FILES["file"];
var_dump($files);
$f = new ReceiveFiles();
$f->setFile($_FILES["file"]);
$f->runn();