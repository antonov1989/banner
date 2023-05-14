<?php

class User
{
    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) { //whether ip is from the share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //whether ip is from the proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else { //whether ip is from the remote address
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $_SERVER['HTTP_USER_AGENT'] ?? '';
    }
}