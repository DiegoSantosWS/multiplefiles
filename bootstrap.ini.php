<?php

function __autoload($class) {
    include_once("class/$class.class.php");
}