<?php

class CreateUser
{
    private $acao;
    private $user;
    private $pass;
    private $type;

    function __contruct($inst = []) {
        $this->acao = $inst["acao"];
        $this->user = $inst["user"];
        $this->pass = $inst["pass"];
        $this->type = $inst["type"];
        self::runn();
    }

    private function createUser(string $user, string $pass) {

        $usr = curl_init();
        curl_setopt($usr, CURLOPT_URL,"");
        curl_setopt($usr, CURLOPT_POST,1);
        curl_setopt($usr, CURLOPT_POST,$login);
        curl_setopt($usr, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($usr, CURLOPT_VERBOSE,true);
        $result = curl_exec($usr);
        if(!$result){
            die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
        }
        curl_close($curl);
        var_dump($result);
    }

    private function loginUser(string $login, string $pass) {

        try {
            $login = [
                "user"     => $login,
                "password" => $pass
            ];

            $usr = curl_init();
            curl_setopt($usr, CURLOPT_URL,"https://fileserver.s3apis.com/v1/user/login");
            curl_setopt($usr, CURLOPT_POST,1);
            curl_setopt($usr, CURLOPT_POST,$login);
            curl_setopt($usr, CURLOPT_RETURNTRANSFER,true);
            curl_setopt($usr, CURLOPT_VERBOSE,true);
            $result = curl_exec($usr);
            if(!$result){
                die('Error: "' . curl_error($usr) . '" - Code: ' . curl_errno($usr));
            }
            curl_close($curl);
            var_dump($result);

        } catch(Exeption $ex) {
            die($ex->getMessege());
        }
    }

    private function runn() {
        switch ($this->type) {
            case 'createUser':
                self::createUser($this->user, $this->pass);
                break;
            case 'login':
                self::loginUser($this->user, $this->pass);
                break;
            default:
                # code...
                break;
        }
    }
}
?>