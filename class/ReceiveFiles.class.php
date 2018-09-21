<?php 


class ReceiveFiles {

    private $files = [];

    function __construct() { 
    }


    public function setFile($file) {
        return $this->files["file"] = $file;
    }

    public function getFile() {
        return $this->files["file"];
    }

    public function runn() {
        self::dd($this->files["file"]);
    }

    private static function dd($var) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
    
}
