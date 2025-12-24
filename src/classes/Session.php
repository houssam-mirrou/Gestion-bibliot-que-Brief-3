<?php

class Session
{
    static public function __construct()
    {
        session_start();
    }
    static public function session_die()
    {
        $_SESSION = [];
        session_destroy();
    }
}
