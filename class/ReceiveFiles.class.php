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
        return self::dd($this->files["file"]);
    }

    private static function dd($var) {
        $html  = "<pre>";
        $html .= print_r($var);
        $html .= "</pre>";

        return $html;
    }
    
}
