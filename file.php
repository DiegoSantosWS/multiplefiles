<?php

require_once("bootstrap.ini.php");

$f = new ReceiveFiles();
$f->setFile($_FILES["file"]);
$data = $f->runn();
