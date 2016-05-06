<?php

/**
 * Created by PhpStorm.
 * User: ccdnkenny
 * Date: 2016/5/3
 * Time: 上午11:53
 */
class User
{
    public $username;
    public $password;
    public $email;

    /**
     * User constructor.
     * @param $username
     * @param $password
     * @param $email
     */
    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
}