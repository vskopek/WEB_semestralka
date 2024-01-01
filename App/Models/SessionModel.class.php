<?php

namespace app\Models;

class SessionModel
{

    public function __construct()
    {
        session_start();
    }

    public function setValue(string $key, $value){
        $_SESSION[$key] = $value;
    }

    public function getValue(string $key){
        if($this->hasKey($key)){
            return $_SESSION[$key];
        }

        return null;
    }

    public function hasKey(string $key){
        return isset($_SESSION[$key]);
    }

    public function removeKey(string $key){
        if($this->hasKey($key)){
            unset($_SESSION[$key]);
        }
    }

    public function destroy(){
        session_unset();
        session_destroy();
    }
}